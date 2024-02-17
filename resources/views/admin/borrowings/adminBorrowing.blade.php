@extends('main')
@section('content')
<div class="body-admin">
    <div class="page-heading">
        <section class="section">
            <div class="card card-bookmarks m-4">
                <div class="card-header" style="background-color: rgb(255, 255, 255)">
                    <h5 class="card-title" style="color: rgb(140, 37, 68)">
                        Borrowed book list
                    </h5>
                </div>
                <div class="card-body p-3" >
                    <div class="table-responsive datatable-minimal">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th>Borrower</th>
                                    <th>Book Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Fadli</td>
                                    <td>dilan 1991</td>
                                    <td>
                                        <a href="/borrowing/detail/admin" class="btn icon btn"
                                            style="background-color: rgb(160, 100, 118)"><i class="bi bi-eye-fill"></i></a>
                                        <a href="/borrowing/edit/admin" class="btn icon btn-light" style="background-color: rgb(255, 255, 227)"><i class="bi bi-pencil-square"></i></a>
                                        <a href="#" class="btn icon btn-light"><i class="bi bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection
