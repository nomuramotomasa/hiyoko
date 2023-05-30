<?php

namespace App\Http\Controllers\Others;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\User;

class OtherProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show_profile(string $id)
    {
        $user = User::find($id);
        $follow = Follow::where('user_id', $id)->get()->count();
        $follower = Follow::where('follow_id', $id)->get()->count();

        return view('.show', compact('user', 'follow', 'follower'));
    }
}
