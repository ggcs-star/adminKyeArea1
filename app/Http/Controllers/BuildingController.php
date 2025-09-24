<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BuildingController extends Controller
{
public function index()
{
    $paginatedProjects = Project::paginate(10)->through(function ($project) {
        return [
            'id' => $project->_id,
            'name' => $project->project['name'] ?? null,
            'building' => $project->building ?? null,
        ];
    });

    $allProjects = Project::all()->map(function ($project) {
        return [
            'id' => $project->_id,
            'name' => $project->project['name'] ?? null,
        ];
    });

    return Inertia::render('Building/Index', [
        'projects' => $paginatedProjects,
        'allProjects' => $allProjects,
    ]);
}



    public function show(Project $project)
    {
        // dd($project);
        return Inertia::render('Building/View', [
            'project' => $project,
        ]);
    }

    public function store(Request $request, Project $project)
    {
        $validated = $request->validate([
            'building.entry_direction' => 'nullable|string',
            'building.common_lighting' => 'nullable|string',
            'building.number_of_lifts' => 'nullable|string',
            'building.direction_info' => 'nullable|string',
            'building.security' => 'nullable|string',
        ]);
// dd($validated);
        $project->building = $validated['building'];
        $project->save();

        return redirect()->back()->with('success', 'Building info created successfully.');
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'building.entry_direction' => 'nullable|string',
            'building.common_lighting' => 'nullable|string',
            'building.number_of_lifts' => 'nullable|string',
            'building.direction_info' => 'nullable|string',
            'building.security' => 'nullable|string',
        ]);

        $project->building = $validated['building'];
        $project->save();

        return redirect()->back()->with('success', 'Building info updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->building = null;
        $project->save();

        return redirect()->back()->with('success', 'Building info deleted successfully.');
    }
}
