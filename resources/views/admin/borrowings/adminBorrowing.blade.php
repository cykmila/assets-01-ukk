@extends('main')
@section('content')
    <div class="page-heading">
        <section class="section">
            <div class="card-header">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3 class="m-4">Books Category</h3>
                </div>
            </div>

            <div class="d-flex justify-content-end m-4">
                <div  data-bs-toggle="tooltip" data-bs-placement="top" title="Add">
                    <a href="/adminBorrowing/create" class="btn icon icon-left btn" style="background-color: rgb(220, 187, 197)"><i
                            class="bi bi-bag-fill"></i> Add</a>
                </div>
                <div style="margin-left: 4px" data-bs-toggle="tooltip" data-bs-placement="top" title="regenerate">
                    <a href="{{ url('/cetak') }}" class="btn icon icon-left btn" style="background-color: rgb(220, 187, 197)"><i
                            class="bi bi-printer-fill"></i> Regenerate</a>

                </div>
            </div>

            <div class="card m-4">
                <div class="card-body">
                    <div class="table-responsive datatable-minimal">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Borrower</th>
                                    <th>Book</th>
                                    <th>Borrowing Date</th>
                                    <th>Return Date</th>
                                    <th>Book Count</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @php
                                $counter =1;
                            @endphp
                            <tbody>
                                @foreach ($borrowing as $borrowings)
                                    <tr>

                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $borrowings->user->name }}</td>
                                        {{-- <td> {{ $borrowings->book->title }}</td> --}}
                                        <td> <img width="20%" style="padding:0% !important"
                                            src="{{ Storage::url('public/picture/') . $borrowings->book->picture }}"> </td>
                                        <td>{{ $borrowings->borrowing_date }}</td>
                                        <td>{{ $borrowings->return_date }}</td>
                                        <td>{{ $borrowings->book_count }}</td>
                                        <td>{{ $borrowings->status }}</td>
                                        <td>
                                            @if ($borrowings->status == "borrowed")
                                            <div class="d-inline-block mb-2 me-1">
                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                    <a href="{{ route('adminBorrowing.edit', $borrowings->borrowing_id) }}"
                                                        class="btn icon btn" style="background-color: rgb(220, 187, 197)"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="d-inline-block mb-2 me-1">
                                            <form action="{{ route('adminBorrowing.destroy', $borrowings->borrowing_id) }}" method="POST" onsubmit="return confirm('yakin ingin menghapus data?')">
                                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="delete">
                                                @csrf
                                                @method('DELETE')
                                               <button type="submit" class="btn icon btn" style="background-color: rgb(220, 187, 197); margin-left:4%"><i class="bi bi-trash-fill"></i></button>
                                                </div>
                                            </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
