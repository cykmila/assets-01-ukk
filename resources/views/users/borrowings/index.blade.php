@extends('main')
@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="page-heading">
        <section class="section">
            <div class="d-flex justify-content-end mb-4">
                <a href="{{ route('borrowing-create', $borrowings) }}" class="btn icon icon-left btn" style="background-color: rgb(160, 100, 118)"><i
                        class="bi bi-bag-fill"></i> Add</a>    
            </div>
            <div class="card card-bookmarks">
                <div class="card-header">
                    <h5 class="card-title">
                        Borrowed book list
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive datatable-minimal">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th>Book Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($borrowings as $borrowing)
                                <tr>
                                    <td> {{ $borrowing->book_id }}</td>
                                    <td>
                                        <div class="d-inline-block mb-2 me-1">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Book">
                                                <a href="{{ route('borrowing-detail', $borrowing) }}" class="btn icon btn"
                                                style="background-color: rgb(160, 100, 118)"><i
                                                class="bi bi-eye-fill"></i></a>
                                            </div>
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
