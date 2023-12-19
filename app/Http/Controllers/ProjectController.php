<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Controller;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        Project::create($validated);

        return redirect('/');
    }

    public function show(Project $project)
    {
        return Inertia::render('Project/index', [
            'project' => $project,
            'tags' => $project->tags,
            'tasks' => $project->tasks,
        ]);
    }
}
