@extends('main')
@section('content')
    <div class="page-heading">
            <div class="card-header">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3 class="m-4">Detail Category</h3>
                </div>
            </div>
            <section class="section">
                <div class="card m-4">
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Book</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categories)
                                    <tr>
                                        <td>{{ $categories->title }}</td>
                                        <td>{{ $categories->category->category }}</td>
                                        <td>
                                            <img src="{{ asset('storage/picture/' . $categories->picture) }}" alt=""
                                                style="width:40px; height:10%">
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
