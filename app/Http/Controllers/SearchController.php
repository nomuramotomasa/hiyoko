<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('search.index')->with('users', $users);
    }


    public function search(Request $request)
    {
        $users = User::where('profile_id', $request->name)->get();
        return view('search.index')->with('users', $users);
    }
}
