<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::query();

        if ($request->has('search') && ! empty($request->search)) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('project.name', 'like', "%{$searchTerm}%")
                    ->orWhere('project.slug', 'like', "%{$searchTerm}%")
                    ->orWhere('project.type', 'like', "%{$searchTerm}%")
                    ->orWhere('project.location.city', 'like', "%{$searchTerm}%")
                    ->orWhere('project.location.area', 'like', "%{$searchTerm}%");
            });
        }

        if ($request->has('status') && ! empty($request->status)) {
            $query->where('project.status', $request->status);
        }

        if ($request->has('type') && ! empty($request->type)) {
            $query->where('project.type', $request->type);
        }

        if ($request->has('city') && ! empty($request->city)) {
            $query->where('project.location.city', 'like', "%{$request->city}%");
        }

        if ($request->has('area') && ! empty($request->area)) {
            $query->where('project.location.area', 'like', "%{$request->area}%");
        }

        $sortField = $request->get('sort_field', 'created_at');
        $sortDirection = $request->get('sort_direction', 'desc');

        if ($sortField === 'location.city') {
            $query->orderBy('project.location.city', $sortDirection);
        } elseif ($sortField === 'location.area') {
            $query->orderBy('project.location.area', $sortDirection);
        } else {
            $query->orderBy("project.{$sortField}", $sortDirection);
        }

        $projectsPaginated = $query->paginate(10);

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

        $filterOptions = [
            'types' => Project::raw(function ($collection) {
                return $collection->distinct('project.type');
            }),
            'cities' => Project::raw(function ($collection) {
                return $collection->distinct('project.location.city');
            }),
            'areas' => Project::raw(function ($collection) {
                return $collection->distinct('project.location.area');
            }),
            'statuses' => ['active', 'inactive', 'draft'],
        ];

        // dd($filterOptions['types']);

        return Inertia::render('Projects/Index', [
            'projects' => $projectsPaginated,
            'allProjects' => $allProjects,
            'filters' => $request->only(['search', 'status', 'type', 'city', 'area']),
            'filterOptions' => $filterOptions,
            'sort' => ['field' => $sortField, 'direction' => $sortDirection],
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
            'project' => $projectData,
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
            'project' => $projectData,
        ]);

        return redirect()->route('projects.index')
            ->with('success', 'Project updated successfully.');
    }

    public function view($id)
    {
        $project = Project::where('_id', $id)->firstOrFail();

        return Inertia::render('Projects/ProjectView', [
            'project' => $project,
        ]);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        $projectData = $project->project;

        if (! empty($projectData['reel']) && \Storage::disk('public')->exists($projectData['reel'])) {
            \Storage::disk('public')->delete($projectData['reel']);
        }

        if (! empty($projectData['brochure']) && \Storage::disk('public')->exists($projectData['brochure'])) {
            \Storage::disk('public')->delete($projectData['brochure']);
        }

        if (! empty($projectData['logo_image_id']) && \Storage::disk('public')->exists($projectData['logo_image_id'])) {
            \Storage::disk('public')->delete($projectData['logo_image_id']);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully along with its files.');
    }

    public function allProjects()
    {
        $projects = Project::select('project_id', 'project_name')->get();

        return response()->json($projects);
    }
}
