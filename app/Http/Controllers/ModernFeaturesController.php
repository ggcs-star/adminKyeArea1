<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ModernFeaturesController extends Controller
{
   

     public function index()
    {
        $paginatedProjects = Project::paginate(10)->through(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
                'modern_features' => $project->modern_features ?? null,
            ];
        });

        $allProjects = Project::all()->map(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
            ];
        });

        return Inertia::render('ModernFeatures/Index', [
            'projects' => $paginatedProjects,
            'allProjects' => $allProjects,
        ]);
    }

    public function store(Request $request, Project $project)
    {
        $validated = $request->validate([
            'modern_features.smart_home_automation' => 'nullable|string',
            'modern_features.solar_pv' => 'boolean',
            'modern_features.modular_kitchen' => 'nullable|string',
            'modern_features.designer_lighting' => 'nullable|string',
            'modern_features.security_monitoring' => 'nullable|string',
            'modern_features.video_door_phone' => 'nullable|string',
            'modern_features.digital_lock' => 'nullable|string',
            'modern_features.energy_efficient_appliances' => 'nullable|string',
            'modern_features.ev_charging' => 'boolean',
            'modern_features.high_speed_internet' => 'nullable|string',
            'modern_features.water_purification' => 'nullable|string',
            'modern_features.climate_control' => 'nullable|string',
            'modern_features.green_building_certification' => 'nullable|string',
        ]);

        $project->update(['modern_features' => $validated['modern_features']]);

        return redirect()->route('modern-features.index')
            ->with('success', 'Modern Features created successfully!');
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'modern_features.smart_home_automation' => 'nullable|string',
            'modern_features.solar_pv' => 'boolean',
            'modern_features.modular_kitchen' => 'nullable|string',
            'modern_features.designer_lighting' => 'nullable|string',
            'modern_features.security_monitoring' => 'nullable|string',
            'modern_features.video_door_phone' => 'nullable|string',
            'modern_features.digital_lock' => 'nullable|string',
            'modern_features.energy_efficient_appliances' => 'nullable|string',
            'modern_features.ev_charging' => 'boolean',
            'modern_features.high_speed_internet' => 'nullable|string',
            'modern_features.water_purification' => 'nullable|string',
            'modern_features.climate_control' => 'nullable|string',
            'modern_features.green_building_certification' => 'nullable|string',
        ]);

        $project->update(['modern_features' => $validated['modern_features']]);

        return redirect()->route('modern-features.index')
            ->with('success', 'Modern Features updated successfully!');
    }

    public function destroy(Project $project)
    {
        $project->update(['modern_features' => null]);

        return redirect()->route('modern-features.index')
            ->with('success', 'Modern Features deleted successfully!');
    }

    public function show(Project $project)
    {
        return Inertia::render('ModernFeatures/View', [
            'project' => $project,
        ]);
    }
}
