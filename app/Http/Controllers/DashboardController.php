<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Inertia\Inertia;

class DashboardController extends Controller
{
  public function index()
{
    // Key Metrics
    $metrics = [
        'total_projects'    => Project::count(),
        'active_projects'   => Project::where('project.status', 'active')->count(),
        'featured_projects' => Project::where('featured', true)->count(),
        'emerging_projects' => Project::where('emerging_area', true)->count(),
        'total_builders'    => Project::distinct('builder.name')->count('builder.name'), // ✅ add builder count
    ];

    // Recent Projects (last 5)
    $recentProjects = Project::latest()->take(5)->get()->map(function ($p) {
        return [
            'id'         => $p->_id ?? $p->id,
            'name'       => $p->project['name'] ?? 'N/A',
            'city'       => $p->project['location']['city'] ?? 'N/A',
            'status'     => $p->project['status'] ?? 'N/A',
            'featured'   => $p->featured ?? false,
            'builder'    => $p->builder['name'] ?? 'N/A',
            'created_at' => optional($p->created_at)->format('M d, Y'),
            'edit_url'   => route('projects.edit', $p->id), // ✅ should be edit route, not index
        ];
    });

    // Status Distribution
    $statusDistribution = Project::raw(function ($collection) {
        return $collection->aggregate([
            ['$group' => [
                '_id' => '$project.status',
                'count' => ['$sum' => 1],
            ]],
            ['$project' => [
                'status' => '$_id', // ✅ rename _id → status
                'count' => 1,
                '_id' => 0,
            ]]
        ]);
    });

    // City Distribution (agar chart banana ho to same project step yahan bhi apply kar sakte ho)
    $cityDistribution = Project::raw(function ($collection) {
        return $collection->aggregate([
            ['$group' => [
                '_id' => '$project.location.city',
                'count' => ['$sum' => 1],
            ]],
            ['$project' => [
                'city' => '$_id', // ✅ rename _id → city
                'count' => 1,
                '_id' => 0,
            ]]
        ]);
    });

    // Config Summary (sirf BHK count nikale, chahe Apartments, Villas ya Bunglows ho)
    $configSummary = Project::all()
        ->flatMap(function ($project) {
            $config = $project->configuration ?? [];

            return collect($config)->flatMap(function ($group) {
                return collect($group)
                    ->keys()
                    ->filter(function ($key) {
                        return preg_match('/BHK$/i', $key); // ✅ sirf BHK rakho
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
        // Monthly project creation trend (last 12 months)
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

        // Builder-wise project count
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
