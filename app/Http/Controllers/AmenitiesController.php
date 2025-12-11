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

        /* -------------------- Amenities -------------------- */
        'amenities.clubhouse' => 'boolean',
        'amenities.floating_fitness' => 'boolean',
        'amenities.dedicated_guest_rooms' => 'boolean',
        'amenities.work_from_home' => 'boolean',
        'amenities.health_hub' => 'boolean',
        'amenities.kids_area' => 'boolean',
        'amenities.senior_sitouts' => 'boolean',
        'amenities.community_living' => 'boolean',
        'amenities.swimming_pool' => 'boolean',
        'amenities.spa' => 'boolean',
        'amenities.indoor_games' => 'boolean',
        'amenities.jogging_track' => 'boolean',
        'amenities.pet_friendly_area' => 'boolean',
        'amenities.wifi_zone' => 'boolean',
        'amenities.solar_powered_lighting' => 'boolean',
        'amenities.rainwater_harvesting' => 'boolean',
        'amenities.green_landscaping' => 'boolean',
        'amenities.security_24_7' => 'boolean',
        'amenities.visual_monitoring' => 'boolean',
        'amenities.fire_resilience' => 'boolean',

        /* ⭐ Newly Added Amenities */
        'amenities.automatic_elevators' => 'boolean',
        'amenities.entrance_gate' => 'boolean',
        'amenities.png_gas' => 'boolean',
        'amenities.water_supply' => 'boolean',
        'amenities.ample_parking' => 'boolean',
        'amenities.fire_safety_provision' => 'boolean',
        'amenities.cctv_camera_24x7' => 'boolean',
        'amenities.attractive_foyer' => 'boolean',

        /* 🔥 Newly Requested Additional Features */
        'amenities.decorative_foyer' => 'boolean',
        'amenities.designer_compound_wall' => 'boolean',
        'amenities.power_backup' => 'boolean',
        'amenities.vastu_compliant_entry' => 'boolean',
        'amenities.solar_panel' => 'boolean',
        'amenities.lifestyle_amenities' => 'boolean',

        /* ----------------- Modern Features ----------------- */
        'amenities.smart_home_automation' => 'boolean',
        'amenities.solar_pv' => 'boolean',
        'amenities.modular_kitchen' => 'boolean',
        'amenities.designer_lighting' => 'boolean',
        'amenities.security_monitoring' => 'boolean',
        'amenities.video_door_phone' => 'boolean',
        'amenities.digital_lock' => 'boolean',
        'amenities.energy_efficient_appliances' => 'boolean',
        'amenities.ev_charging' => 'boolean',
        'amenities.high_speed_internet' => 'boolean',
        'amenities.water_purification' => 'boolean',
        'amenities.climate_control' => 'boolean',
        'amenities.green_building_certification' => 'boolean',

        /* -------------------- Lifestyle -------------------- */
        'amenities.family' => 'boolean',
        'amenities.children' => 'boolean',
        'amenities.elderly' => 'boolean',
        'amenities.wellness' => 'boolean',
        'amenities.community_events' => 'boolean',
        'amenities.hospitality_lounge' => 'boolean',
        'amenities.pet_friendly' => 'boolean',
        'amenities.sports_facilities' => 'boolean',
        'amenities.fitness_center' => 'boolean',
        'amenities.cultural_activities' => 'boolean',
        'amenities.recreational_spaces' => 'boolean',
        'amenities.safety_security' => 'boolean',
        'amenities.green_spaces' => 'boolean',
        'amenities.shopping_convenience' => 'boolean',
        'amenities.work_from_home_friendly' => 'boolean',
        'amenities.entertainment_zones' => 'boolean',
    ]);

    // Save
    $project->update([
        'amenities' => $request->amenities
    ]);

    // return redirect()->route('amenities.index')->with('success', 'Amenities saved successfully! 👍');
    return redirect()->back()->with('success', 'Amenities saved successfully! 👍');
}




    public function destroy(Project $project)
    {
        $project->update(['amenities' => null]);
        // return redirect()->route('amenities.index')->with('success', 'Amenities deleted successfully!');
        return redirect()->back()->with('success', 'Amenities deleted successfully! 👍');
    }
}
