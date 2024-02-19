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
                <div class="d-flex justify-content-end mb-4">
                    @can('admin')
                
                    <a href="/category/create/admin" class="btn icon icon-left btn" style="background-color: rgb(160, 100, 118)">
                        <i class="bi bi-tag-fill"></i> Add</a>
            @endcan
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Romance</td>
                                
                                    <td>
                                        <a href="/book/detail/admin" class="btn icon btn"
                                            style="background-color: rgb(160, 100, 118)"><i class="bi bi-eye-fill"></i></a>
                                            @can('admin')
                                            <a href="/category/edit/admin" class="btn icon btn"
                                                style="background-color: rgb(251, 255, 220)"><i class="bi bi-pencil-square"></i></a>
                                            <a href="/book/hapus/admin" class="btn icon btn"
                                                style="background-color: rgb(160, 100, 118)"><i class="bi bi-trash-fill"></i></a>
                                            @endcan
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
