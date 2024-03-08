<?php

// namespace App\Http\Controllers;

// use App\Models\Borrowing;
// use Illuminate\Http\Request;

// class BorrowingController extends Controller
// {
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
        // $borrowings = Borrowing::latest()->paginate(10);

        // return view('admin.borrowings.adminBorrowing',
        // ['title' => 'Dashboard LibyLine',
        // 'active' => 'borrowing',]);
        // compact('borrowings');

    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
        // return view('admin.borrowings.adminorrowing-create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'user_id'=> 'required',
    //         'book_id' => 'required',
    //         'borrowinng_date' => 'required',
    //         'returned_date' => 'required',
    //         'book_count' => 'required',
    //         'status' => 'required',
    //     ]);
    //     Borrowing::create($request->all());

    //     return redirect()->route('borrowing')->with('success','berhasil memasukan buku');
    // }

    /**
     * Display the specified resource.
     */
    // public function show(Borrowing $borrowing)
    // {
    //     return view('users.Borrowings.Borrowing', compact('borrowings'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Borrowing $borrowing)
    // {
    //     return view('admin.borrowings.adminBorrowing-edit', compact('borrowings'));
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Borrowing $borrowing)
    // {
    //     return $request->validate([
    //         'title'=> 'required|max:50',
    //         'stock' => 'required|255',
    //         'category_id' => 'required',
    //         'publication' => 'required',
    //         'publisher' => 'required',
    //         'synopsis' => 'required',
    //         'rating' => 'nullable',

    //     ]);

    //     $borrowing->update($request->all());

    //     return redirect()->route('borrowing')->with('success','berhasil update buku');
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Borrowing $borrowing)
    // {
    //     $borrowing->delete();

    //     return redirect()->route('borrowing')->with('success','berhasil menghapus buku');
    // }
// }
