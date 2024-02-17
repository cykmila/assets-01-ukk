@extends('main')
@section('content')
<div class="body-admin">
    <div class="page-heading">
        <section class="section">
            <div class="card card-bookmarks m-4">
                <div class="card-body">
                    <div class="table-responsive datatable-minimal">
                        <table class="table" id="table2">
                            <thead>
                                <tr>
                                    <th>Borrower</th>
                                    <th>Book Title</th>
                                    <th>Borrowing Date</th>
                                    <th>Return Date</th>
                                    <th>Book Count</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Fadli</td>
                                    <td>dilan 1991</td>
                                    <td>12-4-23</td>
                                    <td>12-5-23</td>
                                    <td>2</td>
                                    <td>
                                        Borrowed
                                    </div>
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