<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $userId = $request->user;

        $user = User::where('id', $userId)->first();

        dd($user->toArray());
    }
}
