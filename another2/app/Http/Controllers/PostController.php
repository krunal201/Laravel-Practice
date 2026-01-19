<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function update(Request $request, Posts $post)
    {
        Gate::authorize("update-post", $post);
        $post->update($request->only("title", "body"));
        return "Update";
    }

    public function show()
    {
        $post = Posts::with("user")->get();
        return view("post", compact("post"));
    }
}
