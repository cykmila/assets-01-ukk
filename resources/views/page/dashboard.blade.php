@extends('main')

@section('content')
    <div class="background-content">
        <div class="page-heading m-4">

        </div>
        <div class="page-content">
            <section>
                <div class="continer">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-around welcome">
                            @if (auth()->user()->role == 'admin')
                            <h2 class="tag">Hello! Welcome Admin</h2>
                        @else
                            <h2 class="tag">Hello! Welcome to LibyLine</h2>
                        @endif
                        </div>
                        <div class="col-6 mt-4">
                            <img src="../img/hero2.jpg" alt="" style="width: 100%">
                        </div>
                    </div>
                    <div class="row text-center my-5">
                        <div class="col-12">
                            <div class="row text-center m-5">
                                <h4 class="about">About</h4><br>
                                <p class="p-about fw-semibold">LibyLine dedicated to book lending offers a unique experience for readers seeking easy
                                    access to an extensive collection of books. While it does not provide books to read directly online,
                                    LibyLine allows users to browse their digital catalog, select books they are interested in, and then
                                    borrow them in physical or digital format. With its user-friendly interface and easy borrowing process,
                                    LibyLine makes it easy to access reading materials without leaving home. Along with simplified delivery
                                    and returns, users can enjoy the pleasure of reading hassle-free.</p>

                                </div>
                            </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
