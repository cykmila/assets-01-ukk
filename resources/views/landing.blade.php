<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/extensions/bootstrap/css/bootstrap.min.css') }}">
    {{-- link-css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img src="{{ asset('img/logo-libyline.png') }}" alt="Logo" width="60" height="68"
                class="d-inline-block align-text-top">
            </a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn text-white button-regist" href="/register">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row h-100 ">
            {{-- sisi kanan --}}
            <div class="col-12 my-auto h-100 mt-5">
                <h1 class="welcome">Welcome to <span style="font-size: 3.5rem">LibyLine</span>
                </h1>
                <p class="desc">Let’s Find Your Favorite Book!</p>
            </div>
        </div>
        {{-- About --}}
        <div class="col-12">
            <div class="row text-center mb-5">
                <h4 class="about">About</h4><br>
                <p class="p-about">LibyLine dedicated to book lending offers a unique experience for readers seeking easy
                    access to an extensive collection of books. While it does not provide books to read directly online,
                    LibyLine allows users to browse their digital catalog, select books they are interested in, and then
                    borrow them in physical or digital format. With its user-friendly interface and easy borrowing process,
                    LibyLine makes it easy to access reading materials without leaving home. Along with simplified delivery
                    and returns, users can enjoy the pleasure of reading hassle-free.</p>

                </div>
            </div>
        </div>
        {{-- footer --}}
            <footer class="footer fixed-bottom">
                <div class="container d-flex justify-content-between ">
                        <div class="d-flex flex-column mt-2">
                            <h4 class="d-flex column">Thank You!</h4>
                            <p style="line-height: .7;">You’ve Visited LibyLine.</p>
                        </div>
                        <div class="">
                            <img src="{{ asset('img/logo-libyline.png') }}" alt="" class="img-footer">
                        </div>
                </div>
            </footer>

    <script src="{{ asset('assets/extensions/bootstrap/js/bootstrap.min.js') }}"></script>

</body>

</html>
