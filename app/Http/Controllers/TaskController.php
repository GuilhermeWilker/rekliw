<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $markdown = Str::of(request('task_content'))->markdown();
        $tag = request('tag');
        $title = request('task_title');
        $project_id = request('project_id');

        Task::create([
                'task_title' => $title,
                'task_content' => $markdown,
                'tag' => $tag,
                'project_id' => $project_id,
        ]);
    }
}
