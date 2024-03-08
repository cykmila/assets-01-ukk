@extends('main')
@section('content')
<link rel="stylesheet" href="{{ asset('moduls/izitoast/css/iziToast.min.css') }}">
<section class="section">
    <div class="card">
        <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('adminBorrowing.store') }}" method="POST">
                            @csrf
                            <fieldset class="form-group">
                                <label for="user_id">Borrower</label>
                                <select class="form-select" id="user_id" name="user_id">
                                    @foreach ($user as $users)
                                        <option value="{{ $users->user_id }}">{{ $users->name }}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="book_id">Title</label>
                                <select class="form-select" id="book_id" name="book_id">
                                    @foreach ($book as $books)
                                        <option value="{{ $books->book_id }}">{{ $books->title }}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                            <div class="form-group">
                                <label for="borrowing_date">Borrowing Date</label>
                                <input type="date" class="form-control mb-3 flatpickr-no-config" id="borrowing_date"
                                    placeholder="Select date.." name="borrowing_date">
                            </div>
                            <div class="form-group">
                                <label for="return_date">Return Date</label>
                                <input type="date" class="form-control mb-3 flatpickr-no-config" id="return_date"
                                    placeholder="Select date.." name="return_date">
                            </div>
                            <div class="form-group">
                                <label for="book_count">Book Count</label>
                                <input type="text" class="form-control" id="book_count" name="book_count">
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn text-white b-create">Submit
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('moduls/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('moduls/izitoast/js/iziToast.min.js') }}"></script>
    @if (Session::has('error'))
        <script>
            $(document).ready(function() {
                iziToast.error({
                    title: 'Error',
                    message: '{{ Session::get('error') }}',
                    position: 'topRight'
                });
            })
        </script>
    @endif
@endsection
