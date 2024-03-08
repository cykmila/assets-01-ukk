@extends('main')
@section('content')
<div class="page-heading">
        <section class="section">
                <div class="card-header">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3 class="m-4">Books Category</h3>
                    </div>
                </div>
                <div class="card m-4">
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $categories)
                                <tr>
                                    <td>{{ $categories->category }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('adminCategory.show', $categories->category_id) }}" class="btn icon btn"
                                            style="background-color: rgb(220, 187, 197)"><i class="bi bi-eye-fill"></i></a>


                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </section>
    </div>
@endsection
