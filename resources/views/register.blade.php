<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,700&family=Rubik:wght@500&display=swap"
        rel="stylesheet">
</head>

<body id="body">
    <div class="row h-100">

        {{-- //sisi-kiri --}}
        <div class="col-6 d-flex justify-content-center align-item-center  bg-logo h-100">
            <img src="{{ asset('img/logo-libyline.png') }}" alt="" class="w-25 h-25 my-auto">
        </div>

        {{-- //sisi-kanan --}}
        <div class="col-6 bg-form">
            {{-- //title --}}
            <h4 class="h4-regist">Register</h4>
            {{-- //form regist --}}
            <form method="POST" action="register">
                @csrf
                <div class="mb-3 form-username">
                    <label for="username" class="form-label" style="font-family: rubik">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                        placeholder="masukan username" name="username">
                    <small class="text-danger">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="mb-3" style="margin-left: 19%">
                    <label for="password" class="form-label" style="font-family: rubik">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        placeholder="masukan password" name="password">
                    <small class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="mb-3" style="margin-left: 19%">
                    <label for="email" class="form-label" style="font-family: rubik">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="masukan email" required name="email">
                    <small class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="mb-3" style="margin-left: 19%">
                    <label for="name" class="form-label" style="font-family: rubik">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="masukan name" required name="name">
                    <small class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="mb-3" style="margin-left: 19%">
                    <label for="phone" class="form-label" style="font-family: rubik">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                        placeholder="masukan phone" required name="phone">
                    <small class="text-danger">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="mb-3" style="margin-left: 19%">
                    <label for="address" class="form-label" style="font-family: rubik">Address</label>
                    <textarea class="form-control" placeholder="masukan alamat" id="address" name="address" style="height: 100px"></textarea>
                    <small class="text-danger">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <button type="submit" class="button-register btn light text-white"
                    style="margin-left: 19%">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
