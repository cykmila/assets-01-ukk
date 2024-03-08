@extends('main')
@section('content')
    <section class="section">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('adminBorrowing.update', $borrowing->borrowing_id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <fieldset class="form-group">
                                <label for="user_id">Borrower</label>
                                <select class="form-select" id="user_id" name="user_id" disabled>
                                    @foreach ($user as $users)
                                        <option value="{{ $users->user_id }}">{{ $users->name }}</option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <fieldset class="form-group">
                                <label for="book_id">Title</label>
                                <select class="form-select" id="book_id" name="book_id" disabled>
                                    @foreach ($book as $books)
                                        <option value="{{ $books->book_id }}">{{ $books->title }}</option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <div class="form-group">
                                <label for="borrowing_date">Borrowing Date</label>
                                <input type="date" class="form-control mb-3 flatpickr-no-config" id="borrowing_date"
                                    placeholder="Select date.." disabled name="borrowing_date"
                                    value="{{ $borrowing->borrowing_date }}">
                            </div>
                            <div class="form-group">
                                <label for="return_date">Return Date</label>
                                <input type="date" class="form-control mb-3 flatpickr-no-config" id="return_date"
                                    placeholder="Select date.." name="return_date" disabled value="{{ $borrowing->return_date }}">
                            </div>
                            <div class="form-group">
                                <label for="book_count">Book Count</label>
                                <input type="text" class="form-control" readonly id="book_count" name="book_count"
                                    value="{{ $borrowing->book_count }}">
                            </div>
                            <label for="status">Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status"
                                    value="borrowed" {{ $borrowing->status == 'borrowed' ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">
                                    Borrowed
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="status2"
                                    value="returned"  {{ $borrowing->status == 'returned' ? 'checked' : '' }}>
                                <label class="form-check-label" for="status2">
                                    Returned
                                </label>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn text-white b-create">Edit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
