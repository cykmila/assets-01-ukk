@extends('main')
@section('content')
<section class="section" style="min-height: 100vh">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Category Book</h4>
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
                    <div class="d-flex justify-content-end">
                        <a href="#">
                    <button type="submit" class="btn text-white b-create">Submit
                    </button>
                </a>
                </div> 
                </div>
            </div>
        </div>
    </div>
</section>
@endsection