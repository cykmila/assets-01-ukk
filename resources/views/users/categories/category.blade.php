@extends('main')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="card-header">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3 class="mb-4">Books Category</h3>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Romance</td>
                                    <td>Melodylan</td>
                                    <td>10</td>
                                    <td>
                                        <a href="/book/detail" class="btn icon btn"
                                            style="background-color: rgb(160, 100, 118)"><i class="bi bi-eye-fill"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
