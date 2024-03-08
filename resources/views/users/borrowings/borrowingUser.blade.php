@extends('main')
@section('content')
    <div class="page-heading">
        <section class="section">
            <div class="card-header">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3 class="m-4">Borrowed List</h3>
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
                                </tr>
                            </thead>
                            @php
                                $counter = 1;
                            @endphp
                            <tbody>
                                @foreach ($borrowing as $borrowings)
                                    @if ($borrowings->user_id === Auth::id())
                                        <tr>
                                            <td>{{ $counter++ }}</td>
                                            <td>{{ $borrowings->user->name }}</td>
                                            {{-- <td> {{ $borrowings->book->title }}</td> --}}
                                            <td> <img width="20%" style="padding:0% !important"
                                                    src="{{ Storage::url('public/picture/') . $borrowings->book->picture }}">
                                            </td>
                                            <td>{{ $borrowings->borrowing_date }}</td>
                                            <td>{{ $borrowings->return_date }}</td>
                                            <td>{{ $borrowings->book_count }}</td>
                                            <td>{{ $borrowings->status }}</td>

                                        </tr>
                                        @endif
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
