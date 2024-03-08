<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Borrowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        $borrowings = Borrowing::get();

        return view('admin.borrowings.adminBorrowing', [
            'title' => 'Dashboard LibyLine',
            'active' => 'borrowing',
            'borrowing' => $borrowings
        ]);
    }

    public function userBorrowing()
    {
        $borrowings = Borrowing::where("user_id", auth()->user()->user_id)->get();

        return view('users.borrowings.borrowingUser', [
            'title' => 'Dashboard LibyLine',
            'active' => 'borrowing',
            'borrowing' => $borrowings
        ]);
    }

    public function print()
    {
        $this->authorize('admin');
        $borrowings = Borrowing::get();

        return view('admin.borrowings.adminBorrowing-cetak', [
            'title' => 'Dashboard LibyLine',
            'active' => 'borrowing',
            'borrowing' => $borrowings
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('admin');
        $books = Book::get();
        $users = User::where('role', 'user')->get();

        return view('admin.borrowings.adminBorrowing-create', [
            'title' => 'Dashboard LibyLine',
            'active' => 'category',
            'book' => $books,
            'user' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {

        $validateData = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'borrowing_date' => 'required',
            'return_date' => 'required',
            'book_count' => 'required',
        ]);

        // mengambil data buku yang ingin dipinjam
        $bukuYangDipinjam = Book::where('book_id', $request->book_id)->first();

        if ($bukuYangDipinjam->stock < $validateData['book_count']) {

            return back()->with('error', 'Buku tidak memiliki stock yang cukup!');
        }


        $validateData['status'] = 'borrowed';
        Borrowing::create($validateData);

        return redirect('adminBorrowing')->with('success', 'berhasil meminjam buku');
    }

    public function storeUser(Request $request){
        $userId = Auth::id();
        $validateData = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'borrowing_date' => 'required',
            'return_date' => 'required',
            'book_count' => 'required',
        ]);

        // mengambil data buku yang ingin dipinjam
        $bukuYangDipinjam = Book::where('book_id', $request->book_id)->first();

        if ($bukuYangDipinjam->stock < $validateData['book_count']) {

            return back()->with('error', 'Buku tidak memiliki stock yang cukup!');
        }


        $validateData['status'] = 'borrowed';
        $validateData['user_id'] = $userId;
        Borrowing::create($validateData);

        return redirect('borrowingUser')->with('success', 'berhasil meminjam buku');
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
        $this->authorize('admin');
        $books = Book::get();
        $users = User::where('role', 'user')->get();
        // $books = Book::findOrFail($id);
        $borrowing = Borrowing::where('borrowing_id', $id)->first();

        return view('admin.borrowings.adminBorrowing-edit', compact('borrowing'), [
            'active' => 'borrowing',
            'title' => 'Dahsboard LibyLIne',
            'book' => $books,
            'user' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'book_count' => 'required',
            'status' => 'required',
        ]);

        Borrowing::where('borrowing_id', $id)->update($validateData);

        return redirect('adminBorrowing')->with('success', 'berhasil update peminjam');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('admin');
        $borrowing = Borrowing::findorFail($id);

        $borrowing->delete();

        return redirect('adminBorrowing')->with('success', 'peminjaman berhasil dihapus');
    }
}
