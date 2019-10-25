<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard Datacenter') }}</title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/now-ui-dashboard.css?v=1.3.0') }}" rel="stylesheet">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div class="wrapper" id="app">

        <div class="sidebar" data-color="blue">

            <div class="logo text-center">
                <a href="{{ route('home') }}" class="simple-text logo-normal">
                    DATACENTER
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav navbar-nav navbar">
                    <li class="nav-link active">
                        <a href="{{ route('home') }}">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('shutdown') }}"
                            onclick="event.preventDefault();document.getElementById('shut-form').submit();">
                            <i class="now-ui-icons design_app"></i>
                            <p>Shutdown</p>
                        </a>
                    </li>

                    <form id="shut-form" action="{{ route('shutdown') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="shutdown" value="{{ $shut }}">
                    </form>

                    <li class="nav-link">
                        <a href="{{ route('tabela') }}">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Tabelas</p>
                        </a>
                    </li>

                    <li class="nav-link dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Sair</p>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel" id="main-panel">
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script> --}}

    <!-- Chart JS -->
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>

    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/now-ui-dashboard.min.js?v=1.3.0') }}" type="text/javascript"></script>

    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('assets/demo/demo.js') }}"></script>

    @yield( 'scripts' )

    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <script>
        $('.dropdown-toggle').dropdown()

    $(".nav .nav-link").on("click", function(){
        $(".nav").find(".active").removeClass("active")
        $(this).addClass("active")
    })
    </script>

</body>

</html>