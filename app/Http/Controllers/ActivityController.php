<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Project;

class ActivityController extends Controller
{
    public function create(Project $project)
    {
        return view('authorizer.create_activity', compact('project'));
    }


    public function store(Request $request, Project $project)
    {
        // Filter the request to exclude non-fillable fields like _token
        $data = $request->only(['name', 'length', 'width', 'height', 'no_of_components','iron_weight']);

        // Add the project_id manually
        $data['project_id'] = $project->id;

        // Create the activity
        Activity::create($data);

        if ($request->input('action') === 'add_more') {
            return redirect()->route('activities.create', $project->id);
        }

        return redirect()->route('activities.show', $project->id);
    }

    public function show(Project $project)
    {
        $activities = $project->activities;
        $totalVolume = $activities->sum('total_volume');
        $totalIronWeight = $activities->sum('iron_weight');
        $totalComponents = $activities->sum('no_of_components');
        $data = compact('activities', 'project', 'totalVolume', 'totalIronWeight', 'totalComponents');
        // return view('authorizer.show_activities', compact('activities', 'project'));
        return view('authorizer.show_activities')->with($data);
    }

    public function destroy($id){
        $item = Activity::find($id);
        $item->delete();

        return redirect()->route('activities.show', $item->project_id);
    }

    // public function edit(Activity $activity)
    // {
    //     return view('authorizer.edit_activities', compact('activity'));
    // }


    // public function update(Request $request, Activity $activity)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'length' => 'required|numeric',
    //         'width' => 'required|numeric',
    //         'height' => 'required|numeric',
    //         'no_of_components' => 'required|integer',
    //     ]);

    //     $activity->update($request->all());

      
    // }

    public function edit(Activity $activity)
{
    return view('authorizer.edit_activities', compact('activity'));
}

public function update(Request $request, Project $project)
{
    $data = $request->only(['name', 'length', 'width', 'height', 'no_of_components']);

    $data['project_id'] = $project->id;

    // Create the activity
    Activity::create($data);

    if ($request->input('action') === 'add_more') {
        return redirect()->route('activities.create', $project->id);
    }

    return redirect()->route('activities.show', $project->id);
}



}
