<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LifestyleController extends Controller
{
    public function index()
    {
        $paginatedProjects = Project::paginate(10)->through(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
                'lifestyle' => $project->lifestyle ?? null,
            ];
        });

        $allProjects = Project::all()->map(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
            ];
        });

        return Inertia::render('Lifestyles/Index', [
            'projects' => $paginatedProjects,
            'allProjects' => $allProjects,
        ]);
    }

   public function store(Request $request)
{
    $validated = $request->validate([
        'lifestyle.project_id' => 'required|exists:projects,_id',
        'lifestyle.family' => 'boolean',
        'lifestyle.children' => 'boolean',
        'lifestyle.elderly' => 'boolean',
        'lifestyle.wellness' => 'boolean',
        'lifestyle.community_events' => 'boolean',
        'lifestyle.hospitality_lounge' => 'boolean',
        'lifestyle.pet_friendly' => 'boolean',
        'lifestyle.sports_facilities' => 'boolean',
        'lifestyle.fitness_center' => 'boolean',
        'lifestyle.cultural_activities' => 'boolean',
        'lifestyle.recreational_spaces' => 'boolean',
        'lifestyle.safety_security' => 'boolean',
        'lifestyle.green_spaces' => 'boolean',
        'lifestyle.shopping_convenience' => 'boolean',
        'lifestyle.work_from_home_friendly' => 'boolean',
        'lifestyle.entertainment_zones' => 'boolean',
    ]);

    $projectId = $validated['lifestyle']['project_id'];

    $lifestyleData = $validated['lifestyle'];
    unset($lifestyleData['project_id']);

    $project = Project::findOrFail($projectId);
    $project->update(['lifestyle' => $lifestyleData]);

    return redirect()->route('lifestyles.index')->with('success', 'Lifestyle saved successfully!');
}


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'lifestyle.family' => 'boolean',
            'lifestyle.children' => 'boolean',
            'lifestyle.elderly' => 'boolean',
            'lifestyle.wellness' => 'boolean',
            'lifestyle.community_events' => 'boolean',
            'lifestyle.hospitality_lounge' => 'boolean',
            'lifestyle.pet_friendly' => 'boolean',
            'lifestyle.sports_facilities' => 'boolean',
            'lifestyle.fitness_center' => 'boolean',
            'lifestyle.cultural_activities' => 'boolean',
            'lifestyle.recreational_spaces' => 'boolean',
            'lifestyle.safety_security' => 'boolean',
            'lifestyle.green_spaces' => 'boolean',
            'lifestyle.shopping_convenience' => 'boolean',
            'lifestyle.work_from_home_friendly' => 'boolean',
            'lifestyle.entertainment_zones' => 'boolean',
        ]);

        $project = Project::findOrFail($id);
        
        $project->update(['lifestyle' => $validated['lifestyle']]);

        return redirect()->route('lifestyles.index')->with('success', 'Lifestyle updated successfully!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->update(['lifestyle' => null]);

        return redirect()->route('lifestyles.index')->with('success', 'Lifestyle deleted successfully!');
    }
    public function show(Project $project)
    {
        return Inertia::render('Lifestyles/View', [
            'project' => $project,
        ]);
    }
}
