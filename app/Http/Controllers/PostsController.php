<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'text' => 'required|max:255',
        ]);

        $post = new Post;
        $post->author_id = Auth::id();
        $post->text = $validated['text'];
        $post->save();

        return redirect()->back();
    }
}
