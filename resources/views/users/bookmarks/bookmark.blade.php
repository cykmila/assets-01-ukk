@extends('main')
@section('content')
    <section>
        <div class="row">
            <div class="d-flex justify-content-end mb-2">
                <div data-bs-toggle="tooltip" data-bs-placement="top" title="Add book">
                <a href="/book" class="btn icon icon-left btn" style="background-color: rgb(220, 187, 197)"><i
                        class="bi bi-bookmark-plus-fill"></i> Add</a>
            </div>
            </div>
            @foreach ($bookmarks as $bookmark)
            @if ($bookmark->user_id === Auth::id())
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-content position-relative">
                        <div class="card-body">
                            <img class="img-fluid w-100" src="{{ Storage::url('public/picture/') . $bookmark->book->picture }}"
                                alt="Card image cap">
                            <h4 class="card-title mt-3">{{ $bookmark->book->title }}</h4>
                            <p class="card-text" style="font-size: 75%">{!! strip_tags(Str::limit($bookmark->book->synopsis, 100)) !!}</p>
                            <h6 class="card-title mt-3">Remaining stock: {{ $bookmark->book->stock }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </section>
@endsection
