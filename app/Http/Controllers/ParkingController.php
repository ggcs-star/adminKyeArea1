<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ParkingController extends Controller
{
    public function index()
    {
        $paginatedProjects = Project::paginate(10)->through(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
                'parking' => $project->parking ?? null,
            ];
        });
     

        $allProjects = Project::all()->map(function ($project) {
            return [
                'id' => $project->_id,
                'name' => $project->project['name'] ?? null,
            ];
        });
//    dd($allProjects);
        return Inertia::render('Parking/Index', [
            'projects' => $paginatedProjects,
            'allProjects' => $allProjects,
        ]);
    }

    public function store(Request $request, Project $project)
    {
        $validated = $request->validate([
            'parking.ev_charging' => 'boolean',
            'parking.slot_info' => 'nullable|string',
            'parking.basement_ground' => 'nullable|string',
            'parking.total_parking_slots' => 'nullable|integer',
            'parking.two_wheeler_parking' => 'nullable|integer',
            'parking.four_wheeler_parking' => 'nullable|integer',
            'parking.visitor_parking' => 'nullable|integer',
            'parking.covered_parking' => 'nullable|string',
            'parking.car_wash_area' => 'boolean',
            'parking.disabled_friendly' => 'boolean',
            'parking.cctv_security' => 'boolean',
        ]);

        $project->update(['parking' => $validated['parking']]);

        // dd( $project);
        return redirect()->route('parking.index')->with('success', 'Parking info created successfully!');
    }

    public function update(Request $request, Project $project)
    {
        return $this->store($request, $project); 
    }

    public function destroy(Project $project)
    {
        $project->update(['parking' => null]);
        return redirect()->route('parking.index')->with('success', 'Parking info deleted!');
    }

    public function show(Project $project)
    {
        return Inertia::render('Parking/View', [
            'project' => $project,
        ]);
    }
}
