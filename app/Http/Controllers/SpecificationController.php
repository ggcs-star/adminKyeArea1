<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Project;
class SpecificationController extends Controller
{

    public function index()
    {
        $paginatedProjects = Project::paginate(10);

        $paginatedProjects->getCollection()->transform(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
                'specification' => $project->specifications ?? [],
            ];
        });

        $allProjects = Project::all()->map(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
            ];
        });

        return Inertia::render('Specification/Index', [
            'projects' => $paginatedProjects,
            'allProjects' => $allProjects,
        ]);
    }



    public function store(Request $request, Project $project)
    {
        $validated = $request->validate([
            'structure' => 'nullable|string',
            'flooring' => 'nullable|string',
            'kitchen' => 'nullable|string',
            'toilets' => 'nullable|string',
            'utility' => 'nullable|string',
            'electrical' => 'nullable|string',
            'doors_windows' => 'nullable|string',
            'internal_paint' => 'nullable|string',
        ]);

        $project->update([
            'specifications' => $validated,
        ]);
        //  dd($project);
        return redirect()->back()->with('success', 'Specifications added successfully.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->update([
            'specifications' => null
        ]);

        return redirect()->back()->with('success', 'Specification deleted successfully.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'structure' => 'nullable|string',
            'flooring' => 'nullable|string',
            'kitchen' => 'nullable|string',
            'toilets' => 'nullable|string',
            'utility' => 'nullable|string',
            'electrical' => 'nullable|string',
            'doors_windows' => 'nullable|string',
            'internal_paint' => 'nullable|string',
            'external_paint' => 'nullable|string',
        ]);

        $project = Project::where('_id', $id)->firstOrFail();

        $project->specifications = array_merge(
            $project->specifications ?? [],
            $request->only([
                'structure',
                'flooring',
                'kitchen',
                'toilets',
                'utility',
                'electrical',
                'doors_windows',
                'internal_paint',
                'external_paint',
            ])
        );

        $project->save();

        return redirect()->back()->with('success', 'Specification updated successfully.');
    }

    public function show(Project $project)
{
    return Inertia::render('Specification/View', [
        'project' => [
            'id' => $project->_id,
            'name' => $project->project['name'] ?? null,
            'specifications' => $project->specifications ?? [],
        ],
    ]);
}
}
