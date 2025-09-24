<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Inertia\Inertia;
class ConfigurationController extends Controller
{
    public function index()
    {
        $projects = Project::select('id', 'project')->get()->map(fn($p) => [
            'id' => $p->id,
            'name' => $p->project['name'] ?? null,
        ]);

        $perPage = 10;
        $paginatedProjects = Project::paginate($perPage);

        $configurations = $paginatedProjects->through(function ($project) {
            $sizes = [];
            foreach ($project->configuration ?? [] as $configGroup) {
                if (is_array($configGroup)) {
                    if (isset($configGroup['size'])) {
                        $sizes[] = (int) str_replace([' Sq. ft.', ','], '', $configGroup['size']);
                    } else {
                        foreach ($configGroup as $subConfig) {
                            if (is_array($subConfig) && isset($subConfig['size'])) {
                                $sizes[] = (int) str_replace([' Sq. ft.', ','], '', $subConfig['size']);
                            }
                        }
                    }
                }
            }

            $sizeRange = !empty($sizes)
                ? min($sizes) . ' - ' . max($sizes) . ' Sq. ft.'
                : null;

            return [
                'project_id' => $project->id,
                'project_name' => $project->project['name'] ?? null,
                'configurations' => $project->configuration ?? (object) [],
                'size_range' => $sizeRange,
            ];
        });

        return Inertia::render('Configurations/Index', [
            'configurations' => $configurations,
            'projects' => $projects,
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'project_id' => 'required|exists:projects,_id',
            'type' => 'required|string',
            'configuration' => 'required|array',
            'configuration.*.rooms' => 'nullable|array',
            'configuration.*.imageslider' => 'nullable|array',
            'configuration.*.floorPlans' => 'nullable|array',
            'configuration.*.galleryImages' => 'nullable|array',
            'configuration.*.price' => 'nullable|string',
            'configuration.*.size' => 'nullable|string',
            'configuration.*.date' => 'nullable|string',
            'type_price' => 'nullable|string',
        ]);

        $project = Project::findOrFail($validated['project_id']);
        $config = $project->configuration ?? [];

        if (!isset($config[$validated['type']])) {
            $config[$validated['type']] = [];
        }

        $normalizeBhk = function ($name) {
            $number = preg_replace('/[^0-9]/', '', $name);
            if (!$number)
                $number = 'Unknown';
            return $number . 'BHK';
        };

        $normalizeRoom = function ($name) {
            if (!$name)
                return '';
            $name = strtolower(trim($name));
            $name = str_replace(' ', '_', $name);
            $name = preg_replace('/[^a-z0-9_]/', '', $name);
            return $name;
        };


        foreach ($validated['configuration'] as $bhkName => $bhkData) {
            $bhkKey = $normalizeBhk($bhkName);

            $rooms = [];
            if (!empty($bhkData['rooms'])) {
                foreach ($bhkData['rooms'] as $roomName => $roomData) {
                    $roomKey = $normalizeRoom($roomName);
                    $rooms[$roomKey] = $roomData;
                }
            }

            $config[$validated['type']][$bhkKey] = [
                'rooms' => $rooms,
                'imageslider' => $bhkData['imageslider'] ?? [],
                'floorPlans' => $bhkData['floorPlans'] ?? [],
                'galleryImages' => $bhkData['galleryImages'] ?? [],
                'price' => $bhkData['price'] ?? null,
                'size' => $bhkData['size'] ?? null,
                'date' => $bhkData['date'] ?? null,
            ];
        }

        if (isset($validated['type_price'])) {
            $config[$validated['type']]['price'] = $validated['type_price'];
        }

        $project->configuration = $config;
        $project->save();

        return redirect()->back()->with('success', 'Configuration added successfully!');
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'type_price' => 'nullable|string',
            'old_type' => 'nullable|string',
            'configuration' => 'nullable|array',
            'configuration.*.rooms' => 'nullable|array',
            'configuration.*.imageslider' => 'nullable|array',
            'configuration.*.floorPlans' => 'nullable|array',
            'configuration.*.galleryImages' => 'nullable|array',
            'configuration.*.price' => 'nullable|string',
            'configuration.*.size' => 'nullable|string',
            'configuration.*.date' => 'nullable|string',
        ]);

        $config = $project->configuration ?? [];

        if (!empty($validated['old_type']) && $validated['old_type'] !== $validated['type']) {
            unset($config[$validated['old_type']]);
        }

        $config[$validated['type']] = [];

        $normalizeBhk = function ($name) {
            $number = preg_replace('/[^0-9]/', '', $name); 
            return $number ? $number . 'BHK' : ucfirst($name);
        };

        $normalizeRoom = function ($name) {
            if (!$name)
                return '';
            $name = strtolower(trim($name));
            $name = str_replace(' ', '_', $name);
            $name = preg_replace('/[^a-z0-9_]/', '', $name);
            return $name;
        };

        foreach ($validated['configuration'] ?? [] as $bhkName => $bhkData) {
            $bhkKey = $normalizeBhk($bhkName);

            $rooms = [];
            foreach ($bhkData['rooms'] ?? [] as $roomName => $roomData) {
                $roomKey = $normalizeRoom($roomName);
                $rooms[$roomKey] = $roomData;
            }

            $config[$validated['type']][$bhkKey] = [
                'rooms' => $rooms,
                'imageslider' => $bhkData['imageslider'] ?? [],
                'floorPlans' => $bhkData['floorPlans'] ?? [],
                'galleryImages' => $bhkData['galleryImages'] ?? [],
                'price' => $bhkData['price'] ?? null,
                'size' => $bhkData['size'] ?? null,
                'date' => $bhkData['date'] ?? null,
            ];
        }

        if (isset($validated['type_price'])) {
            $config[$validated['type']]['price'] = $validated['type_price'];
        }

        $project->configuration = $config;
        $project->save();

        return redirect()->back()->with('success', 'Configuration updated successfully!');
    }

    public function show($id, $type)
    {
        $project = Project::findOrFail($id);

        $configData = (array) $project->configuration;
        $config = $configData[$type] ?? null;

        if (!$config) {
            abort(404, "Configuration type '$type' not found");
        }

        return Inertia::render('Configurations/Show', [
            'project' => $project,
            'type' => $type,
            'config' => $config,
        ]);
    }

    public function destroy(Project $project, $type)
    {
        $config = $project->configuration ?? [];

        if (isset($config[$type])) {
            unset($config[$type]);
            $project->configuration = $config;
            $project->save();
        }

        return redirect()->back()->with('success', 'Configuration deleted!');
    }

}
