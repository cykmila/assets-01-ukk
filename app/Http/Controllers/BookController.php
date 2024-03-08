<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookmark;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        $bookmark = Bookmark::get();

        return view('admin.books.adminBook',['
        title' => 'Dashboard LibyLine',
        'active' => 'book',
        'book' => $books,
        'bookmarks'=> $bookmark
    ]);
}


    public function bookUser(){

        $books = Book::all();
        return view('users.books.book', [
            'title' => 'Dashboard LibyLine',
            'active'=> 'book',
            'book' => $books
    ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('admin');
        $categories = Category::get();

        return view('admin.books.adminBook-create', [
            'title'=> 'Dashboard LibyLine',
            'active'=> 'book',
            'category'=> $categories
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        $request->validate([
            'title'=> 'required',
            'stock' => 'required',
            'picture'=> 'required|image',
            'author'=> 'required',
            'category_id' => 'required',
            'publication' => 'required',
            'publisher' => 'required',
            'synopsis' => 'required',
        ]);


        $picture = $request->file('picture');
        $picture->storeAs('public/picture', $picture->hashName());

        Book::create([
            'title'=> $request->title,
            'picture'=> $picture->hashName(),
            'category_id'=> $request->category_id,
            'author'=> $request->author,
            'publisher'=> $request->publisher,
            'publication'=> $request->publication,
            'stock'=> $request->stock,
            'synopsis'=> $request->synopsis,

        ]);

        return redirect('adminBook')->with('success','berhasil memasukan buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = Book::where('book_id', $id)->first();


        $review = Review::where('book_id', $id)->limit(3)->get();

        return view('admin.books.adminBook-detail', compact('books', 'review'),[
            'title'=> 'Dashboard LibyLine',
            'active' => 'books'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('admin');
        $books = Book::findOrFail($id);
        $category = Category::get();
        return view('admin.books.adminBook-edit', compact('books','category'),[
            'active' => 'books',
            'title' => 'Dahsboard LibyLIne'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $this->authorize('admin');
        $books = Book::findOrFail($id);

        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $picture->storeAs('public/picture', $picture->hashName());

            File::delete(public_path('public/picture') . '/' . $books->picture);

            $books->update([
                'picture' => $picture->hashName(),
                'title' => $request->title,
                'author' => $request->author,
                'publisher' => $request->publisher,
                'publication' => $request->publication,
                'synopsis' => $request->synopsis,
                'category_id' => $request->category_id,
                'stock' => $request->stock,
            ]);
        } else {
            $books->update([
                'title' => $request->title,
                'author' => $request->author,
                'publisher' => $request->publisher,
                'publication' => $request->publication,
                'synopsis' => $request->synopsis,
                'category_id' => $request->category_id,
                'stock' => $request->stock,
            ]);
        }


        return redirect('adminBook')->with('success','berhasil update buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('admin');
        $books = Book::findOrFail($id);

        // Hapus bookmark terkait buku yang akan dihapus
    Bookmark::where('book_id', $id)->delete();

    // Hapus gambar dari penyimpanan
    File::delete(public_path('public/picture') . '/' . $books->picture);



        $books->delete();

        return redirect('adminBook')->with('success','buku berhasil dihapus');
    }
}
