<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome-free-5.5.0-web/css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/waves.css') }}">
</head>
<style>
    body {
        background-color: #0EB5ED;
    }
</style>
<body>
    <div id="app">  
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="logo d-flex justify-content-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Maldives
                </a>
            </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse  d-flex justify-content-center" id="navbarSupportedContent " style="padding: 10px;">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <button class="bars waves-effect">
                            <i class="fa fa-bars"></i>
                        </button>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    
                </div>
        </nav>

        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/operator" class="side-link waves-effect">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('operator/pengembalian') }}" class="side-link waves-effect">
                            <i class="fa fa-book"></i>
                            <span>Pengembalian</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('listpeminjaman') }}" class="side-link waves-effect">
                            <i class="fa fa-journal-whills"></i>
                            <span>Peminjaman Buku</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('listpengembalian') }}" class="side-link waves-effect">
                            <i class="fa fa-journal-whills"></i>
                            <span>Pengembalian Buku</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="side-link waves-effect" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </section>
        </aside>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/morris.min.js') }}"></script>
    <script src="{{ asset('js/raphael.min.js') }}"></script>
    <script src="{{ asset('js/waves.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
