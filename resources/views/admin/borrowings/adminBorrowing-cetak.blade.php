{{-- @extends('main')
@section('content') --}}
{{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <div class="page-heading">



            <div class="card card-bookmarks">

                <div class="card-body">
                    <div class="table-responsive datatable-minimal">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Borrower</th>
                                    <th>Title</th>
                                    <th>Borrowing Date</th>
                                    <th>Return Date</th>
                                    <th>Book Count</th>
                                    <th>Status</th>
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
                                        <td> {{ $borrowings->book->title }}</td>

                                        <td>{{ $borrowings->borrowing_date }}</td>
                                        <td>{{ $borrowings->return_date }}</td>
                                        <td>{{ $borrowings->book_count }}</td>
                                        <td>{{ $borrowings->status }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="justify-content-end d-flex">

                        <a onclick="window.print()" class="btn icon icon-left btn"
                            style="background-color: rgb(160, 100, 118)"><i class="bi bi-download text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</body>

</html>
