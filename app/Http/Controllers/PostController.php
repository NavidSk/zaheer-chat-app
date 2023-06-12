<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;

class postController extends Controller
{
    public function index(Request $request)
    {
        $users = User::take(10)->get();
        return view('posts.index', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100|unqiue:posts,title'
        ]);
    }
}
