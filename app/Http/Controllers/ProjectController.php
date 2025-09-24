<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Project;

class ProjectController extends Controller
{
   public function index()
{
    $projectsPaginated = Project::paginate(10);

    $allProjects = Project::all()->map(function ($proj) {
        return [
            'id' => (string) $proj->_id,
            'project' => $proj->project,
            'status' => $proj->status ?? 'inactive',
            'featured' => $proj->featured ?? false,
            'emerging_property' => $proj->emerging_property ?? false,
            'emerging_area' => $proj->emerging_area ?? false,
        ];
    });

    return Inertia::render('Projects/Index', [
        'projects' => $projectsPaginated,
        'allProjects' => $allProjects,
    ]);
}



    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'project.name' => 'required|string',
            'project.slug' => 'required|string',
            'project.type' => 'nullable|string',
            'project.location.address' => 'nullable|string',
            'project.location.city' => 'nullable|string',
            'project.location.area' => 'nullable|string',
            'project.location.map_description' => 'nullable|string',
            'project.reel' => 'nullable|url',
            'project.brochure' => 'nullable|url',
            'project.logo_image_id' => 'nullable|url',
            'project.status' => 'nullable',
            'project.phase' => 'nullable',
        ]);


        $projectData = $validated['project'];

        
        Project::create([
            'project' => $projectData
        ]);

        return redirect()->route('projects.index')
            ->with('success', 'Project created successfully.');
    }


    public function update(Request $request, $id)
    {

        $project = Project::where('_id', $id)->firstOrFail();

        $validated = $request->validate([
            'project.name' => 'required|string',
            'project.slug' => 'required|string',
            'project.type' => 'nullable|string',
            'project.location.address' => 'nullable|string',
            'project.location.city' => 'nullable|string',
            'project.location.area' => 'nullable|string',
            'project.location.map_description' => 'nullable|string',
            'project.reel' => 'nullable',
            'project.brochure' => 'nullable',
            'project.logo_image_id' => 'nullable|url',
            'project.status' => 'nullable',
             'project.phase' => 'nullable',
        ]);
        // dd( $validated);

        $projectData = $project->project;

        $projectData['name'] = $validated['project']['name'];
        $projectData['status'] = $validated['project']['status'];
        $projectData['slug'] = $validated['project']['slug'];
        $projectData['type'] = $validated['project']['type'];
        $projectData['location'] = $validated['project']['location'];
         $projectData['phase'] = $validated['project']['phase'];
        
        $projectData['reel'] = $validated['project']['reel'] ?? $projectData['reel'];
        $projectData['brochure'] = $validated['project']['brochure'] ?? $projectData['brochure'];
        $projectData['logo_image_id'] = $validated['project']['logo_image_id'] ?? $projectData['logo_image_id'];

        $project->update([
            'project' => $projectData
        ]);

        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully.');
    }



    public function view($id)
    {
        $project = Project::where('_id', $id)->firstOrFail();
        return Inertia::render('Projects/ProjectView', [
            'project' => $project
        ]);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $projectData = $project->project;

        if (!empty($projectData['reel']) && \Storage::disk('public')->exists($projectData['reel'])) {
            \Storage::disk('public')->delete($projectData['reel']);
        }

        if (!empty($projectData['brochure']) && \Storage::disk('public')->exists($projectData['brochure'])) {
            \Storage::disk('public')->delete($projectData['brochure']);
        }

        if (!empty($projectData['logo_image_id']) && \Storage::disk('public')->exists($projectData['logo_image_id'])) {
            \Storage::disk('public')->delete($projectData['logo_image_id']);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully along with its files.');
    }

    

}
