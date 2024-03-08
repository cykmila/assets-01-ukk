@extends('main')
@section('content')
    <section class="section" style="min-height: 100vh">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Category Book</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="{{ url('adminCategory') }}" method="POST">
                        <div class="col-md-12">
                            @csrf
                            <div class="form-group m-2">
                                <label class="mb-3" for="category">Category</label>
                                <input type="text" class="form-control" id="category" name="category">
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn text-white b-create">Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
