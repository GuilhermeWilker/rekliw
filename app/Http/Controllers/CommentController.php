<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create([
            'task_id' => $request->input('task_id'),
            'content' => $request->input('content'),
        ]);

        return redirect()->back();
    }
}
