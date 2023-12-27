<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

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

    public function show(Task $task)
    {
        return Inertia::render('Project/show', [
            'task' => $task,
            'comments' => $task->comments,
        ]);
    }

    public function reaction(Request $request)
    {
        $reaction = $request->input('reaction');
        $taskId = $request->input('task_id');

        $task = Task::find($taskId);

        if ($reaction === 1) {
            $task->update([
                'reaction' => 'like',
            ]);
        }

        if ($reaction === 2) {
            $task->update([
                'reaction' => 'dislike',
            ]);
        }
    }
}
