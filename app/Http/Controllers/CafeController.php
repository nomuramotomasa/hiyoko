<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class CafeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cafes = Cafe::whereIs_visible(0)->get();
        return view('cafe_form.index', compact('cafes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cafe_form.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:2', 'max:50'],
            'prefecture' => ['required'],
            'address' => ['required', 'max:100'],
            'review' => ['required','min:1', 'max:5'],
            'is_visible' => ['required'],
        ]);

        $cafe = new Cafe;
        $cafe->name = $request->name;
        $cafe->prefecture = $request->prefecture;
        $cafe->address = $request->address;
        $cafe->review = $request->review;
        $cafe->is_visible = $request->is_visible;
        $cafe->save();

        return redirect('cafes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cafe = Cafe::find($id);
        return view('cafe_form.show', compact('cafe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cafe = Cafe::find($id);
        return view('cafe_form.edit', compact('cafe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:2', 'max:50'],
            'prefecture' => ['required'],
            'address' => ['required', 'max:100'],
            'review' => ['required','min:1', 'max:5'],
            'is_visible' => ['required'],
        ]);

        $cafe = Cafe::findOrFail($id);
        $cafe->name = $request->name;
        $cafe->prefecture = $request->prefecture;
        $cafe->address = $request->address;
        $cafe->review = $request->review;
        $cafe->is_visible = $request->is_visible;
        $cafe->save();

        return redirect('cafes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cafe = Cafe::find($id);
        $cafe->delete();
        return redirect('cafes');
    }
}
