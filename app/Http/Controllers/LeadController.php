<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::orderBy('created_at', 'desc')->paginate(10);

        return Inertia::render('Leads/Index', [
            'leads' => $leads,
        ]);
    }

 public function show($id)
{
    $lead = Lead::with('project')->findOrFail($id);

    return Inertia::render('Leads/Show', [
        'lead' => $lead,
        'project' => $lead->project, 
    ]);
}

public function destroy($id)
{
    $lead = Lead::findOrFail($id);
    $lead->delete();

    return redirect()->route('leads.index')->with('success', 'Lead deleted successfully.');
}

}
