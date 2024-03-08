@extends('main')
@section('content')
    <section>
        <div class="row">
            <div class="d-flex justify-content-end mb-2">
                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Add book">
                    <a href="/adminBook/create" class="btn icon icon-left btn" style="background-color: rgb(220, 187, 197)"><i
                            class="bi bi-book-fill"></i> Add</a>
                </div>
            </div>
            @foreach ($book as $books)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content position-relative">
                            <div class="card-body">
                                <img class="img-fluid w-100" src="{{ Storage::url('public/picture/') . $books->picture }}"
                                    alt="Card image cap">
                                <h4 class="card-title mt-3">{{ $books->title }}</h4>
                                <p class="card-text" style="font-size: 75%">{{ $books->synopsis }}</p>
                                <h6 class="card-title mt-3">Remaining stock: {{ $books->stock }}</h6>
                            </div>

                            @if ($books->bookmark->where('user_id', auth()->user()->user_id)->count() == 0)
                                <form action="{{ route('bookmark.store') }}" method="POST" class="position-absolute top-0">
                                    @csrf
                                    <input type="hidden" name="book_id" value="{{ $books->book_id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
                                    <button type="submit" class="bg-transparent border-0">
                                        <i class="bi bi-bookmark-plus-fill text-white fs-2"></i>
                                    </button>
                                </form>
                            @else
                            <form action="{{ route('bookmark.destroy', $books->book_id) }}" method="POST" class="position-absolute top-0">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="book_id" value="{{ $books->book_id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
                                <button type="submit" class="bg-transparent border-0">
                                    <i class="bi bi-bookmark-dash-fill text-white fs-2"></i>
                                </button>
                            </form>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between mx-4 mb-2">
                            <div class="d-inline-block mb-2 me-1">
                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="detail book">
                                    <a href="{{ route('adminBook.show', $books->book_id) }}" class="btn icon btn"
                                        style="background-color: rgb(220, 187, 197)"><i class="bi bi-eye-fill "></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
