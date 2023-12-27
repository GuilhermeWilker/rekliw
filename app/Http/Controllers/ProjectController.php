<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

        $validated['link'] = Str::uuid();
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
