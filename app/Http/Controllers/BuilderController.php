<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

use Inertia\Inertia;
class BuilderController extends Controller
{
  
public function index()
{
    $projectsPaginated = Project::paginate(10)->through(function ($proj) {
        return [
            '_id' => (string) $proj->_id,
            'project' => $proj->project,
            'builder' => $proj->builder ?? null,
        ];
    });

    $allProjects = Project::all()->map(function ($proj) {
        return [
            '_id' => (string) $proj->_id,
            'project' => $proj->project,
        ];
    });

    return Inertia::render('Builder/Index', [
        'projects' => $projectsPaginated,  
        'allProjects' => $allProjects,  
    ]);
}


    public function store(Request $request)
    {
        
        $request->validate([
            'project_id' => 'required',
            'builder.name' => 'required|string',
            'builder.logo_image_id' => 'nullable|string',
            'builder.corporate_address' => 'nullable|string',
            'builder.contact.website' => 'nullable|url',
            'builder.contact.sales_email' => 'nullable|email',
            'builder.contact.phone' => 'nullable|string',
        ]);
       

        $project = Project::findOrFail($request->project_id);

//  dd($project);
        $project->builder = [
            "name" => $request->input('builder.name'),
            "logo_image_id" => $request->input('builder.logo_image_id'),
            "corporate_address" => $request->input('builder.corporate_address'),
            "contact" => [
                "website" => $request->input('builder.contact.website'),
                "sales_email" => $request->input('builder.contact.sales_email'),
                "phone" => $request->input('builder.contact.phone'),
            ],
        ];

        $project->save();

        return redirect()->route('builder.create')->with('success', 'Builder added to project successfully.');
    }
    public function show($id)
{
    $project = Project::where('_id', $id)->firstOrFail();

    return Inertia::render('Builder/ViewBuilder', [
        'builder' => $project->builder ?? null,
        'projectName' => $project->project['name'] ?? ''
    ]);
}
}
