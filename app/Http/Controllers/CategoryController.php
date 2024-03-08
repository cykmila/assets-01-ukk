<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();

        return view('admin.categories.adminCategory', [
            'title' => 'Dashboard LibyLine',
            'active' => 'category',
            'category'=> $categories
        ]);
    }

    public function categoryUser(){
        $categories = Category::get();
        return view('users.categories.category', [
            'title'=> 'Dashboard LibyLine',
            'active'=> 'category',
            'category'=> $categories
        ]);
    }

    /**

     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('user');
        return view('admin.categories.adminCategory-create', [
            'title'=> 'Dashboard LibyLine',
            'active'=> 'category',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('user');
    $request->validate([
        'category' => 'required'
    ]);

       Category::create([
        'category'=> $request->category,
       ]);

       return redirect('adminCategory')->with('success','berhasil memasukan buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Book::with('category')->where('category_id', $id)->get();
        $books = Book::where('book_id', $id)->get();


        return view('admin.categories.adminCategory-detail', [
            'title'=> 'Dashboard LibyLine',
            'active'=> 'category',
            'categories' => $category,
            'books' => $books
        ]);

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('user');
        $categories = Category::findorFail($id);

        $categories->delete();

        return redirect('adminCategory')->with('success','buku berhasil dihapus');
    }
}
