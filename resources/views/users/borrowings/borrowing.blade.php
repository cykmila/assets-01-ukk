@extends('main')
@section('content')
    <div class="page-heading">
        <section class="section">
            <div class="d-flex justify-content-end mb-4">
                @can('user')
                <a href="/book" class="btn icon icon-left btn" style="background-color: rgb(160, 100, 118)"><i
                        class="bi bi-bag-fill"></i> Add</a>    
                @endcan
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
                                <tr>
                                    <td>dilan 1991</td>
                                    <td>
                                        <div class="d-inline-block mb-2 me-1">
                                            <div data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Book">
                                                <a href="/borrowing/detail" class="btn icon btn"
                                                    style="background-color: rgb(160, 100, 118)"><i
                                                        class="bi bi-eye-fill"></i></a>
                                            </div>
                                        </div>
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
@endsection
