<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;
class ProjectFlagController extends Controller
{
 public function showFlags(Project $project)
    {
        $selectedProject = [
            'id' => $project->id,
            'name' => $project->project['name'] ?? '',
            'status' => $project->project['status'] ?? 'inactive',
            'featured' => (bool) $project->featured,
            'emerging_property' => (bool) $project->emerging_property,
            'emerging_area' => (bool) $project->emerging_area,
        ];

        $projects = Project::all()->map(function($p) {
            return [
                'id' => $p->id,
                'project' => $p->project,
                'featured' => $p->featured,
                'emerging_property' => $p->emerging_property,
                'emerging_area' => $p->emerging_area,
            ];
        });

        return Inertia::render('Projects/Index', [
            'projects' => $projects,
            'selectedProject' => $selectedProject,
        ]);
    }


    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'status' => 'required|string|in:active,inactive',
        'featured' => 'boolean',
        'emerging_property' => 'boolean',
        'emerging_area' => 'boolean',
    ]);

    $project = Project::findOrFail($id);

    $data = $project->project; 
    $data['status'] = $validated['status']; 
    $project->project = $data; 

    $project->featured = $validated['featured'];
    $project->emerging_property = $validated['emerging_property'];
    $project->emerging_area = $validated['emerging_area'];

    $project->save();

    return redirect()->back()->with('success', 'Project flags updated successfully!');
}


}
