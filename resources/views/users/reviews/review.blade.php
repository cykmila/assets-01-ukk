@extends('main')
@section('content')
    <section id="horizontal-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Review</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label" for="review">Review</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <input type="text" id="review" class="form-control" name="review"
                                            placeholder="review">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="rating">Rating</label><br>
                                    <div name="rating" id="basic"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn light text-white me-1 mb-1"
                            style="background-color: rgb(133, 65, 85)">Submit</button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
