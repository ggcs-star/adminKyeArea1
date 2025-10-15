<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Inertia\Inertia;

class DashboardController extends Controller
{
  public function index()
{
    $metrics = [
        'total_projects'    => Project::count(),
        'active_projects'   => Project::where('project.status', 'active')->count(),
        'featured_projects' => Project::where('featured', true)->count(),
        'emerging_projects' => Project::where('emerging_area', true)->count(),
        'total_builders'    => Project::distinct('builder.name')->count('builder.name'), 
    ];

    $recentProjects = Project::latest()->take(5)->get()->map(function ($p) {
        return [
            'id'         => $p->_id ?? $p->id,
            'name'       => $p->project['name'] ?? 'N/A',
            'city'       => $p->project['location']['city'] ?? 'N/A',
            'status'     => $p->project['status'] ?? 'N/A',
            'featured'   => $p->featured ?? false,
            'builder'    => $p->builder['name'] ?? 'N/A',
            'created_at' => optional($p->created_at)->format('M d, Y'),
            'edit_url'   => route('projects.index', $p->id), 
        ];
    });

    $statusDistribution = Project::raw(function ($collection) {
        return $collection->aggregate([
            ['$group' => [
                '_id' => '$project.status',
                'count' => ['$sum' => 1],
            ]],
            ['$project' => [
                'status' => '$_id', 
                'count' => 1,
                '_id' => 0,
            ]]
        ]);
    });

    $cityDistribution = Project::raw(function ($collection) {
        return $collection->aggregate([
            ['$group' => [
                '_id' => '$project.location.city',
                'count' => ['$sum' => 1],
            ]],
            ['$project' => [
                'city' => '$_id', 
                'count' => 1,
                '_id' => 0,
            ]]
        ]);
    });

    $configSummary = Project::all()
        ->flatMap(function ($project) {
            $config = $project->configuration ?? [];

            return collect($config)->flatMap(function ($group) {
                return collect($group)
                    ->keys()
                    ->filter(function ($key) {
                        return preg_match('/BHK$/i', $key);
                    });
            });
        })
        ->countBy()
        ->map(function ($count, $type) {
            return [
                'type' => $type,
                'count' => $count,
            ];
        })
        ->values();

    return Inertia::render('Dashboard/Index', [
        'metrics'            => $metrics,
        'recentProjects'     => $recentProjects,
        'statusDistribution' => $statusDistribution,
        'cityDistribution'   => $cityDistribution,
        'configSummary'      => $configSummary,
    ]);
}


    public function analytics()
    {
        $monthlyTrends = Project::where('created_at', '>=', now()->subMonths(12))
            ->get()
            ->groupBy(function ($project) {
                return $project->created_at->format('Y-m');
            })
            ->map(function ($group, $key) {
                return [
                    '_id' => [
                        'year' => (int) explode('-', $key)[0],
                        'month' => (int) explode('-', $key)[1],
                    ],
                    'count' => $group->count(),
                ];
            })
            ->sortByDesc(function ($item) {
                return $item['_id']['year'] * 100 + $item['_id']['month'];
            })
            ->take(12)
            ->values();

        $builderStats = Project::all()
            ->groupBy(function ($project) {
                return $project->builder['name'] ?? 'Unknown';
            })
            ->map(function ($group) {
                return $group->count();
            })
            ->sortDesc()
            ->take(10)
            ->map(function ($count, $builder) {
                return ['builder' => $builder, 'count' => $count];
            })
            ->values();

        return Inertia::render('Dashboard/Analytics', [
            'monthlyTrends' => $monthlyTrends,
            'builderStats' => $builderStats,
        ]);
    }
}
