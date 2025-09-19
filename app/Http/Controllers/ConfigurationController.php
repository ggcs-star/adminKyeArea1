<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Inertia\Inertia;
class ConfigurationController extends Controller
{
    public function index()
    {
        $projects = Project::select('id', 'project')->get()->map(fn($p) => [
            'id' => $p->id,
            'name' => $p->project['name'] ?? null,
        ]);

        $perPage = 10;
        $paginatedProjects = Project::paginate($perPage);

        $configurations = $paginatedProjects->through(function ($project) {
            $sizes = [];
            foreach ($project->configuration ?? [] as $configGroup) {
                if (is_array($configGroup)) {
                    if (isset($configGroup['size'])) {
                        $sizes[] = (int) str_replace([' Sq. ft.', ','], '', $configGroup['size']);
                    } else {
                        foreach ($configGroup as $subConfig) {
                            if (is_array($subConfig) && isset($subConfig['size'])) {
                                $sizes[] = (int) str_replace([' Sq. ft.', ','], '', $subConfig['size']);
                            }
                        }
                    }
                }
            }

            $sizeRange = !empty($sizes)
                ? min($sizes) . ' - ' . max($sizes) . ' Sq. ft.'
                : null;

            return [
                'project_id' => $project->id,
                'project_name' => $project->project['name'] ?? null,
                'configurations' => $project->configuration ?? (object) [],
                'size_range' => $sizeRange,
            ];
        });

        return Inertia::render('Configurations/Index', [
            'configurations' => $configurations, 
            'projects' => $projects,
        ]);
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_id' => 'required|exists:projects,_id',
            'type' => 'required|string',
            'price' => 'required|string',
        ]);

        $project = Project::findOrFail($validated['project_id']);

    
        $config = $project->configuration ?? [];

       
        $config[$validated['type']] = [
            'price' => $validated['price']
        ];

        $project->configuration = $config;
        $project->save();

        return redirect()->back()->with('success', 'Configuration added successfully!');
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'price' => 'required|string',
            'old_type' => 'nullable|string', 
        ]);

        $config = $project->configuration ?? [];

       
        if (!empty($validated['old_type']) && $validated['old_type'] !== $validated['type']) {
            unset($config[$validated['old_type']]);
        }

        $config[$validated['type']] = ['price' => $validated['price']];
        $project->configuration = $config;
        $project->save();

        return redirect()->back()->with('success', 'Configuration updated!');
    }


    public function destroy(Project $project, $type)
    {
        $config = $project->configuration ?? [];

        if (isset($config[$type])) {
            unset($config[$type]); 
            $project->configuration = $config;
            $project->save();
        }

        return redirect()->back()->with('success', 'Configuration deleted!');
    }

}
