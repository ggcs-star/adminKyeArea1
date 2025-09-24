<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LocalityDataController extends Controller
{
   public function index()
    {
        $paginatedProjects = Project::paginate(10)->through(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
                'localityData' => $project->localityData ?? null,
            ];
        });

        $allProjects = Project::all()->map(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
            ];
        });

        return Inertia::render('LocalityData/Index', [
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
        'localityData.name' => 'nullable|string',
        'localityData.city' => 'nullable|string',
        'localityData.state' => 'nullable|string',
        'localityData.pinCode' => 'nullable|string',
        'localityData.growth' => 'nullable|string',
        'localityData.growthPeriod' => 'nullable|string',
        'localityData.avgRate' => 'nullable|string',
        'localityData.nearestMetro' => 'nullable|string',
        'localityData.nearestBusStop' => 'nullable|string',
        'localityData.schools' => 'nullable|integer',
        'localityData.hospitals' => 'nullable|integer',
        'localityData.shoppingCenters' => 'nullable|integer',
        'localityData.parks' => 'nullable|integer',
        'localityData.crimeRate' => 'nullable|string',
        'localityData.avgRentalYield' => 'nullable|string',
        'localityData.futureDevelopments' => 'nullable|string',
        'localityData.connectivity' => 'nullable|string',
        'localityData.walkScore' => 'nullable|integer',
        'localityData.transitScore' => 'nullable|integer',
    ]);

    $project = Project::findOrFail($id);

    $project->update(['localityData' => $validated['localityData']]);

    return redirect()->route('localityData.index')
        ->with('success', 'Locality data updated successfully!');
}


       public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->update(['localityData' => null]);

        return redirect()->route('localityData.index')->with('success', 'Lifestyle deleted successfully!');
    }

    public function show(Project $project)
    {
        return Inertia::render('LocalityData/View', [
            'project' => $project,
        ]);
    }
}
