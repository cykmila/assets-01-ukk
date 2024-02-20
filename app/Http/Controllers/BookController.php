<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::latest()->paginate(10);

        return view('book.index', compact('book'));
        ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|max:50',
            'stock' => 'required|255',
            'category_id' => 'required',
            'publication' => 'required',
            'publisher' => 'required',
            'synopsis' => 'required',
            'rating' => 'nullable',
        ]);
        Book::create($request->all());

        return redirect()->route('book.index')->with('success','berhasil memasukan buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $books)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $books)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $books)
    {
        return $request->validate([
            'title'=> 'required|max:50',
            'stock' => 'required|255',
            'category_id' => 'required',
            'publication' => 'required',
            'publisher' => 'required',
            'synopsis' => 'required',
            'rating' => 'nullable',

        ]);

        $books->update($request->all());

        return redirect()->route('book.index')->with('success','berhasil update buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $books)
    {
        $books->delete();

        return redirect()->route('book.index')->with('success','berhasil menghapus buku');
    }
}
