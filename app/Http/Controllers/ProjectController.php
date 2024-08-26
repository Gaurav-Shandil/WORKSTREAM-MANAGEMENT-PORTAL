<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Activity;

class ProjectController extends Controller
{
    // public function demo(){
    //     return view('dashboard');
    // }
    public function index()
    {
        $projects = Project::all();
        $data = compact('projects');
        return view('authorizer.index')->with($data);
        // return view('authorizer.index', compact('projects'));
    }

    public function create()
    {
        return view('authorizer.create_project');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            // Add other valid ation rules as necessary
        ]);

        $project = Project::create($validatedData);

        return redirect()->route('activities.create', $project->id);
    }

    public function show(Project $project)
    {
        return view('authorizer.show_activities', compact('project'));
    }
}
