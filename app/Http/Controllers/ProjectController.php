<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;
use Inertia\Controller;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
        ]);

        $project = (new Project())->insert($validated);

        if ($project) {
            return redirect('/');
        }
    }

    public function show(Project $project)
    {
        return Inertia::render('Project/index', [
            'project' => $project,
            'tags' => Tag::all(),
        ]);
    }
}
