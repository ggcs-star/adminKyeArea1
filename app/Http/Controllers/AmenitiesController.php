<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AmenitiesController extends Controller
{
    public function index()
    {
        $paginatedProjects = Project::paginate(10)->through(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
                'amenities' => $project->amenities ?? null,
            ];
        });

        $allProjects = Project::all()->map(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
            ];
        });

        return Inertia::render('Amenities/Index', [
            'projects' => $paginatedProjects,
            'allProjects' => $allProjects,
        ]);
    }
public function show(Project $project)
{
    return Inertia::render('Amenities/View', [
        'project' => $project
    ]);
}
    public function store(Request $request, Project $project)
    {
   
        $validated = $request->validate([
            'amenities.clubhouse' => 'nullable|string',
            'amenities.floating_fitness' => 'nullable|string',
            'amenities.dedicated_guest_rooms' => 'nullable|string',
            'amenities.work_from_home' => 'nullable|string',
            'amenities.health_hub' => 'nullable|string',
            'amenities.kids_area' => 'nullable|string',
            'amenities.senior_sitouts' => 'nullable|string',
            'amenities.community_living' => 'nullable|string',
            'amenities.swimming_pool' => 'nullable|string',
            'amenities.spa' => 'nullable|string',
            'amenities.indoor_games' => 'nullable|string',
            'amenities.jogging_track' => 'nullable|string',
            'amenities.pet_friendly_area' => 'nullable|string',
            'amenities.wifi_zone' => 'nullable|string',
            'amenities.solar_powered_lighting' => 'boolean',
            'amenities.rainwater_harvesting' => 'boolean',
            'amenities.green_landscaping' => 'nullable|string',
            'amenities.security_24_7' => 'boolean',
            'amenities.visual_monitoring' => 'boolean',
            'amenities.fire_resilience' => 'boolean',
            'amenities.amenities_image_id' => 'nullable|string',
        ]);
    //  dd($validated);
        $project->update(['amenities' => $validated['amenities']]);

        return redirect()->route('amenities.index')->with('success', 'Amenities saved successfully!');
    }

    public function destroy(Project $project)
    {
        $project->update(['amenities' => null]);
        return redirect()->route('amenities.index')->with('success', 'Amenities deleted successfully!');
    }
}
