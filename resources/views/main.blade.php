@include('partials.header')

<body>
    <div id="app">
        @include('partials.sidebar')

        <div id="main" class='layout-navbar navbar-fixed'>
            @include('partials.navbar')

            <div id="main-content">
                @yield('content')
            </div>

            @include('partials.footer')
        </div>
    </div>

    @include('partials.script')

</body>

</html>
