@extends('main')
@section('content')
    <section>
        <div class="row">
            <div class="d-flex justify-content-start m-4">
                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Add book">
                <a href="/adminBook/create" class="btn icon icon-left btn" style="background-color: rgb(220, 187, 197)"><i
                        class="bi bi-book-fill"></i> Add</a>
            </div>
            </div>
            @foreach ($book as $books)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card m-4">
                        <div class="card-content m-0">
                            <div class="card-body">
                                <img class="img-fluid" src="{{ Storage::url('public/picture/') . $books->picture }}"
                                    alt="Card image cap">
                                <h4 class="card-title mt-3">{{ $books->title }}</h4>
                                <p class="card-text" style="font-size: 75%">{{ $books->synopsis }}</p>
                                <h6 class="card-title mt-3">Remaining stock: {{ $books->stock }}</h6>
                            </div>
                        </div>

                        <div class="d-flex justify-content-start m-3">
                            <div class="d-flex justify-content-between">
                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="borrowing">
                                    <a href="/adminBorrowing/create" type="button" class="btn btn" style="background-color: rgb(220, 187, 197)"><i
                                            class="bi bi-bag-fill" style="color: rgb(140, 21, 60)"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-inline-block mb-2 me-1">
                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="detail book">
                                    <a href="{{ route('adminBook.show', $books->book_id) }}" class="btn icon btn"><i
                                            class="bi bi-eye"></i></a>
                                </div>
                            </div>
                            <div class="d-inline-block mb-2 me-1">
                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="edit book">
                                    <a href="{{ route('adminBook.edit', $books->book_id) }}" class="btn icon btn"><i
                                            class="bi bi-pencil"></i></a>
                                </div>
                            </div>
                            <div class="d-inline-block mb-2 me-1">
                                <div data-bs-toggle="tooltip" data-bs-placement="top" title="delete book">
                                    <form action="{{ url('adminBook/' . $books->book_id) }}" method="POST" onsubmit="return confirm('yakin ingin menghapus data?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon"><i class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
