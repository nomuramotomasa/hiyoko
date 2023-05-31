<?php

namespace App\Http\Controllers\Others;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\User;

class OthersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function follow(string $id)
    {
        $user = User::find($id);
        $follows = Follow::with('user')->where('user_id', $id)->get();

        return view('number.follow', compact('user', 'follows'));
    }

    public function follower(string $id)
    {
        $user = User::find($id);
        $followers = Follow::with('user')->where('follow_id', $id)->get();

        return view('number.follower', compact('user', 'followers'));
    }
}
