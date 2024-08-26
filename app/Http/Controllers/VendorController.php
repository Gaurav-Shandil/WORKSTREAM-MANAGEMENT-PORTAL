<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Activity;

class VendorController extends Controller
{
    public function index()
    {
        $projects = Project::all(); // Vendors can view all projects
        return view('vendor.index', compact('projects'));
    }
    
    public function show(Project $project)
    {
        $activities = $project->activities;
        $totalVolume = $activities->sum('total_volume');
        $totalIronWeight = $activities->sum('iron_weight');
        $totalComponents = $activities->sum('no_of_components');
        $totalCompleteComponents = $activities->sum('completed_components');
        $overallCompletionPercentage = $totalComponents > 0 ? round(($totalCompleteComponents / $totalComponents) * 100, 2) : 0;
        $data = compact('activities', 'project', 'totalVolume', 'totalIronWeight', 'totalComponents','totalCompleteComponents','overallCompletionPercentage');
        // return view('authorizer.show_activities', compact('activities', 'project'));
        return view('vendor.show_activities')->with($data);
    }

    public function updateActivity(Request $request, Project $project, Activity $activity)
    {
        // Validate the input
        $request->validate([
            'completed_components' => 'required|integer|min:0|max:' . $activity->no_of_components,
        ]);

        // Update the activity with the number of components completed
        $activity->completed_components = $request->input('completed_components');
        $activity->save();

        return redirect()->route('vendor.activities.show', $project->id)->with('success', 'Activity updated successfully');
    }
}
