<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return Inertia::render('Projects/Index', [
            'projects' => $projects
        ]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'project.name' => 'required|string',
            'project.slug' => 'required|string',
            'project.type' => 'nullable|string',
            'project.location.address' => 'nullable|string',
            'project.location.city' => 'nullable|string',
            'project.location.area' => 'nullable|string',
            'project.location.map_description' => 'nullable|string',
            'project.reel' => 'nullable|file|mimetypes:video/*',
            'project.brochure' => 'nullable|file|mimetypes:application/pdf',
            'project.logo_image_id' => 'nullable|image',
            'project.status' => 'nullable',
        ]);

        $projectData = $validated['project'];

        // Save reel
        if ($request->hasFile('project.reel')) {
            $projectData['reel'] = $request->file('project.reel')
                ->store('projects/reels', 'public');
        }

        // Save brochure
        if ($request->hasFile('project.brochure')) {
            $projectData['brochure'] = $request->file('project.brochure')
                ->store('projects/brochures', 'public');
        }

        // Save logo
        if ($request->hasFile('project.logo_image_id')) {
            $projectData['logo_image_id'] = $request->file('project.logo_image_id')
                ->store('projects/logos', 'public');
        }

        // Create project in DB
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
            'project.reel' => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg',
            'project.brochure' => 'nullable|file|mimes:pdf',
            'project.logo_image_id' => 'nullable|file|image',
            'project.status' => 'nullable',
        ]);

        $projectData = $project->project;

        $projectData['name'] = $validated['project']['name'];
          $projectData['status'] = $validated['project']['status'];
        $projectData['slug'] = $validated['project']['slug'];
        $projectData['type'] = $validated['project']['type'];
        $projectData['location'] = $validated['project']['location'];

        // Handle reel file
        if ($request->hasFile('project.reel')) {
            // Delete old file if exists
            if (!empty($projectData['reel']) && \Storage::disk('public')->exists($projectData['reel'])) {
                \Storage::disk('public')->delete($projectData['reel']);
            }

            // Store new file
            $projectData['reel'] = $request->file('project.reel')->store('projects/reels', 'public');
        }

        // Handle brochure file
        if ($request->hasFile('project.brochure')) {
            if (!empty($projectData['brochure']) && \Storage::disk('public')->exists($projectData['brochure'])) {
                \Storage::disk('public')->delete($projectData['brochure']);
            }

            $projectData['brochure'] = $request->file('project.brochure')->store('projects/brochures', 'public');
        }

        // Handle logo image file
        if ($request->hasFile('project.logo_image_id')) {
            if (!empty($projectData['logo_image_id']) && \Storage::disk('public')->exists($projectData['logo_image_id'])) {
                \Storage::disk('public')->delete($projectData['logo_image_id']);
            }

            $projectData['logo_image_id'] = $request->file('project.logo_image_id')->store('projects/logos', 'public');
        }

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

    // Delete reel file
    if (!empty($projectData['reel']) && \Storage::disk('public')->exists($projectData['reel'])) {
        \Storage::disk('public')->delete($projectData['reel']);
    }

    // Delete brochure file
    if (!empty($projectData['brochure']) && \Storage::disk('public')->exists($projectData['brochure'])) {
        \Storage::disk('public')->delete($projectData['brochure']);
    }

    // Delete logo image file
    if (!empty($projectData['logo_image_id']) && \Storage::disk('public')->exists($projectData['logo_image_id'])) {
        \Storage::disk('public')->delete($projectData['logo_image_id']);
    }

    // Finally, delete the project record
    $project->delete();

    return redirect()->route('projects.index')->with('success', 'Project deleted successfully along with its files.');
}

}
