@extends('main')
@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Book</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <input type="text" class="form-control" id="category_id" name="category_id">
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" id="author" name="author">
                    </div>
                    <div class="form-group">
                        <label for="publisher">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher">
                    </div>
                    <div class="form-group">
                        <label for="publication">Publication</label>
                        <input type="text" class="form-control" id="publication" name="publication">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock">
                    </div>
                    <div class="form-group">
                        <label for="synopsis">Synopsis</label>
                        <input type="text" class="form-control" id="summernote" name="synopsis"></input>
                    </div>
                        <fieldset>
                        <div class="input-group mb-3">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="picture"><i
                                        class="bi bi-upload"></i></label>
                                <input type="file" class="form-control" id="picture" name="picture">
                            </div>
                        </div>
                        </fieldset>
                    <div class="d-flex justify-content-end">
                        <a href="#">
                    <button type="submit" class="btn text-white b-create">Edit
                    </button>
                </a>
                </div> 
                </div>
            </div>
        </div>
    </div>
</section>
@endsection