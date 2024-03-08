<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('user');
        $user = Auth::user();
        $bookmark = $user->bookmark;
        $bookmark = Bookmark::with('book', 'user')->get();
        return view('users.bookmarks.bookmark',[
            'title' => 'Dashboard LibyLine',
            'active' => 'bookmark',
            'bookmarks' => $bookmark
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('user');
        $bookmark = Bookmark::all();

        $userId = Auth::id();
        $validateData = $request->validate([
            'user_id'=> 'required',
            'book_id'=> 'required',
            'bookmark' => $bookmark



        ]);
        $validateData['user_id'] = $userId;

        Bookmark::create($validateData);

        return redirect()->route('bookmark.index')->with('success','Berhasil menambah kebookmark!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        Bookmark::where('book_id', $id)->delete();

        return redirect()->route('bookmark.index')->with('success','Berhasil mengurangi ke bookmark!');
    }
}
