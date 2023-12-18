<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tag_name' => 'required',
            'project_id' => 'required|exists:projects,id',
        ]);

        Tag::create($validated);

        return redirect()->back();
    }
}
