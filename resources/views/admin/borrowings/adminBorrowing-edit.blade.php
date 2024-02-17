@extends('main')
@section('content')
<section class="section">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input type="text" class="form-control" id="user_id" name="user_id">
                    </div>

                    <div class="form-group">
                        <label for="book_id">Book ID</label>
                        <input type="text" class="form-control" id="book_id" name="book_id">
                    </div>
                    <div class="form-group"> 
                        <label for="borrowing_date">Borrowing Date</label>
                        <input type="date" class="form-control mb-3 flatpickr-no-config" id="borrowing_date" placeholder="Select date.." name="borrowing_date">
                    </div>
                    <div class="form-group"> 
                        <label for="return_date">Return Date</label>
                        <input type="date" class="form-control mb-3 flatpickr-no-config" id="return_date" placeholder="Select date.." name="return_date">
                    </div>
                    <div class="form-group">
                        <label for="book_count">Book Count</label>
                        <input type="text" class="form-control" id="book_count" name="book_count">
                    </div>
                    <label for="status">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status">
                        <label class="form-check-label" for="status">
                            Borrowed
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status"
                            checked>
                        <label class="form-check-label" for="status">
                            Returned
                        </label>
                    </div>
                    <div class="d-flex justify-content-end">
                    <button type="submit" class="btn text-white b-create">Edit
                    </button>
                </div> 
                </div>
            </div>
        </div>
    </div>
</section>
@endsection