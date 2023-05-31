<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tweet;
use Illuminate\Support\Facades\Auth;


class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tweets = Tweet::all();
        return view('tweets.index', compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tweets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tweet' => ['string','required', 'min:1', 'max:140'],
        ]);

        $tweet = new Tweet;
        $tweet->tweet = $request->tweet;
        $tweet->user_id= Auth::id();
        // dd($request,Auth::id());
        $tweet->favorite = 0;
        $tweet->save();
        return redirect()->route('tweets.index')->with('flash_message', '投稿が完了しました。');
        // return redirect('tweets')->with('flash_message', '投稿が完了しました。');
    }

    /**
     * Display the specified resource.
     */

     public function show(string $id)
     {
         $tweet = Tweet::findOrFail($id);

         return view('tweets.show', compact('tweet'));
     }


    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $tweet = Tweet::find($id);

    if ($tweet) {
        $tweet->delete();
        return redirect()->route('tweets.index')->with('flash_message', '投稿を削除しました。');
    }
}

public function logout()
    {
        Auth::logout();
        return redirect('/')->with('flash_message', 'ログアウトしました');
    }

}
