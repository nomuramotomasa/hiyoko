<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('test_form.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('test_form.create');
    }

    /**
     * Store a newly created resource in storage.
     */

        public function store(Request $request){
            $book = new Book;
            $book->title = $request->title;
            $book->price = $request->price;
            $book->save();

            // 保存の後はredirectかけないとうまく表示されない
            return redirect('books'); // ContactForm
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('test_form.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('test_form.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $book = Book::find($id);
        $book->title = $request->title;
        $book->price = $request->price;
        $book->save();

        // 保存の後はredirectかけないとうまく表示されない
        return redirect('books'); // ContactForm
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('books');
    }
}
