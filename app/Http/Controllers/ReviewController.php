<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::orderBy("user_id","desc")->paginate(10);
        return view('users.reviews.review',['
        title' => 'Dashboard LibyLine',
        'active' => 'review',
        'review'=> $reviews

    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.reviews.review',['
        title' => 'Dashboard LibyLine',
        'active' => 'review',

    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'user_id' => 'required',
            'book_id'=> 'required',
            'review' => 'nullable',
            'rating' => 'required'
        ]);

        Review::create($validateData);

        return redirect()->route('adminBook.show', $validateData['book_id'])->with('success','berhasil menamah rating!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reviews = Review::where("review_id", $id)->first();
        return view('admin.books.adminBook-detail',['
        title' => 'Dashboard LibyLine',
        'active' => 'review',
        'review'=> $reviews
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
        //
    }
}
