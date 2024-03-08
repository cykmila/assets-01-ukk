@extends('main')
@section('content')
    <div class="card mb-3" style="max-width: 1200px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage/picture/' . $books->picture) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $books->title }}</h5>
                    <p class="card-text">category : {{ $books->category->category }}</p>
                    <p class="card-text">Title : {{ $books->title }}</p>
                    <p class="card-text">Author : {{ $books->author }}</p>
                    <p class="card-text">Publication : {{ $books->publication }}</p>
                    <p class="card-text">Publisher : {{ $books->publisher }}</p>
                    <p class="card-text">Stock : {{ $books->stock }}</p>
                    <p class="card-text">Synopsis</p>
                    <p>{{ $books->synopsis }}
                    </p>
                </div>
            </div>

        </div>
    </div>

    @can('user')
    <div class="col-md-12 mt-4">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Review</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('review.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $books->book_id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
                    <div class="col-sm-12 mb-1 mt-5">
                        <div class="form-group">
                            <label for="rating" class="form-label title-label">Book Review</label>
                            <textarea class="form-control summernote" placeholder="Tuliskan Review" id="review" cols="30" rows="10"
                                name="review">{{ old('review') }}</textarea>
                            <small class="text-danger">
                                @error('review')
                                @enderror
                            </small>
                        </div>
                    </div>
                    <label for="rating" class="form-label title-label">Book Rating</label>
                    <div class="rating mt-2 position-absolute left-0">
                        <input type="radio" id="star-1" name="rating" value="5">
                        <label for="star-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path pathLength="360"
                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                </path>
                            </svg>
                        </label>
                        <input type="radio" id="star-2" name="rating" value="4">
                        <label for="star-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path pathLength="360"
                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                </path>
                            </svg>
                        </label>
                        <input type="radio" id="star-3" name="rating" value="3">
                        <label for="star-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path pathLength="360"
                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                </path>
                            </svg>
                        </label>
                        <input type="radio" id="star-4" name="rating" value="2">
                        <label for="star-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path pathLength="360"
                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                </path>
                            </svg>
                        </label>
                        <input type="radio" id="star-5" name="rating" value="1">
                        <label for="star-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path pathLength="360"
                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                </path>
                            </svg>
                        </label>
                    </div>
                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn btn-success " data-bs-dismiss="modal" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Simpan data perubahan">
                            <i class="bi bi-check-circle-fill me-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- nampilin hasil review --}}
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Review</h4>
            </div>
            <div class="card-body">
                @foreach ($review as $reviews)
                    <input type="hidden" name="book_id" value="{{ $books->book_id }}">
                    <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
                    <div class="col-sm-12 mb-1 mt-5">
                        <div class="form-group">
                            <h4>{{ $reviews->user->name }}</h4>
                            <p id="review" cols="30" rows="10" name="review">{{$reviews->review }}</p>
                            <small class="text-danger">
                                @error('review')
                                @enderror
                            </small>
                        </div>
                    </div>
                    {{-- bintang rating --}}
                    <div class="rating mt-2 position-absolute left-0">
                        <input type="radio" {{ $reviews->rating == '5' ? 'checked' : '' }} id="star-1" name="rating" value="5">
                        <label for="star-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path pathLength="360"
                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                </path>
                            </svg>
                        </label>
                        <input type="radio" {{ $reviews->rating == '4' ? 'checked' : '' }} id="star-2" name="rating" value="4">
                        <label for="star-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path pathLength="360"
                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                </path>
                            </svg>
                        </label>
                        <input type="radio" {{ $reviews->rating == '3' ? 'checked' : '' }} id="star-3" name="rating" value="3">
                        <label for="star-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path pathLength="360"
                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                </path>
                            </svg>
                        </label>
                        <input type="radio" {{ $reviews->rating == '2' ? 'checked' : '' }} id="star-4" name="rating" value="2">
                        <label for="star-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path pathLength="360"
                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                </path>
                            </svg>
                        </label>
                        <input type="radio" {{ $reviews->rating == '1' ? 'checked' : '' }} id="star-5" name="rating" value="1">
                        <label for="star-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path pathLength="360"
                                    d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                </path>
                            </svg>
                        </label>
                    </div>
                    <div class="d-flex justify-content-end mt-5"></div>

                    @endforeach
            </div>
        </div>
    </div>

    @endcan
@endsection
