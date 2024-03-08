@extends('main')
@section('content')
    <section class="section" style="min-height: 100vh">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Book</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('adminBook/'. $books->book_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <fieldset class="form-group">
                                <label for="title">Category</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    @foreach ($category as $categories)
                                        <option value="{{ $categories->category_id }}">{{ $categories->category }}</option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $books->title }}">
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" id="author" name="author" value="{{ $books->author }}">
                            </div>
                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $books->publisher }}">
                            </div>
                            <div class="form-group">
                                <label for="publication">Publication</label>
                                <input type="text" class="form-control" id="publication" name="publication" value="{{ $books->publication }}">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="text" class="form-control" id="stock" name="stock" value="{{ $books->stock }}">
                            </div>
                            <div class="form-group">
                                <label for="synopsis">Synopsis</label>
                                <input type="text" class="form-control" id="synopsis" name="synopsis" value="{{ $books->synopsis }}"></input>
                            </div>
                            <fieldset>
                                <div class="col-12">
                                    <label for="picture" class="col-sm-2 col-form-label">Picture</label>
                                    <div class="col-sm-10">
                                        @if ($books->picture)
                                            <img src="{{ Storage::url('public/picture/') . $books->picture }}" alt=""
                                                class="img-preview img-fluid mb-3 col-sm-10 d-block" style="width: auto; height: 480px;">
                                            <input type="hidden" name="oldImage" value="">
                                        @else
                                            <img class="img-preview img-fluid mb-3 col-sm-10 d-block" style="width: auto; height: 480px;">
                                        @endif
                                        <input class="form-control" type="file" id="picture" name="picture" onchange="previewImage()">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn text-white b-create">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
