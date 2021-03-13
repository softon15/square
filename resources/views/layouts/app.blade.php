<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/blog.css') }}">

    <style scoped>
        input{
            height: 35px !important;
        }

        .navbar{
            position: relative !important;
            background-color: grey !important;
        }

        td{
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            text-align: center;
        }

        body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;
        }
        .table-wrapper {
            width: 90%;
            margin: 30px auto;
            padding: 20px;	
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
        }
        .table-title h2 {
            margin: 6px 0 0;
            font-size: 22px;
        }
        .table-title .add-new {
            float: right;
            height: 30px;
            font-weight: bold;
            font-size: 12px;
            text-shadow: none;
            min-width: 100px;
            border-radius: 50px;
            line-height: 13px;
        }
        .table-title .add-new i {
            margin-right: 4px;
        }
        table.table {
            table-layout: fixed;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
        }
        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }
        table.table th:last-child {
            width: 100px;
        }
        table.table td a {
            cursor: pointer;
            display: inline-block;
            margin: 0 5px;
            min-width: 24px;
        }    
        table.table td a.add {
            color: #27C46B;
        }
        table.table td a.edit {
            color: #FFC107;
        }
        table.table td a.delete {
            color: #E34724;
        }
        table.table td i {
            font-size: 19px;
        }
        table.table td a.add i {
            font-size: 24px;
            margin-right: -1px;
            position: relative;
            top: 3px;
        }    
        table.table .form-control {
            height: 32px;
            line-height: 32px;
            box-shadow: none;
            border-radius: 2px;
        }
        table.table .form-control.error {
            border-color: #f50000;
        }
        table.table td .add {
            display: none;
        }

        .height{
            height: 250px;
        }

        .text-overflow{
            height: 160px;
            text-overflow: ellipsis;
            overflow: hidden;
            margin-bottom: 15px;
        }

        .margins{
            margin: 3rem;
            margin-bottom: 30px;
        }

        .bg-gray-100 {
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
        }

        .border-gray-200 {
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--tw-border-opacity));
        }

        .text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }

        .text-gray-500 {
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--tw-text-opacity));
        }

        .text-gray-600 {
            color: #718096;
            color: rgba(113, 128, 150, var(--tw-text-opacity));
        }

        .text-gray-700 {
            color: #4a5568;
            color: rgba(74, 85, 104, var(--tw-text-opacity));
        }

        .text-gray-900 {
            color: #1a202c;
            color: rgba(26, 32, 44, var(--tw-text-opacity));
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
            }

            .dark\:bg-gray-900 {
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
            }

            .dark\:border-gray-700 {
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--tw-border-opacity));
            }

            .dark\:text-white {
                color: #fff;
                color: rgba(255, 255, 255, var(--tw-text-opacity));
            }

            .dark\:text-gray-400 {
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--tw-text-opacity));
            }
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ mix('js/blog.js') }}" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/">Square One</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        

        <main class="py-4">
            @yield('content')
        </main>
        <!-- Footer -->
        <footer>
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">                
                    <li class="list-inline-item">
                    <a href="https://github.com/softon15/square/tree/master">
                        <span class="fa-stack fa-lg">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="icon-github icon-2x"></i>
                        </span>
                    </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Marc Ibi 2021</p>
                </div>
            </div>
            </div>
        </footer>
    </div>
</body>
</html>
