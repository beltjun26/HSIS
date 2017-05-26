<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HSIS') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cashier.css')}}">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
    <div class="navbar">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Class</a></li>
                    <li><a href="#">Grade</a></li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
    </div>
        <div class="sidenav">
            <div class="sidenav-header">
                <img class="profile" src="{{ asset('images/profile.jpg') }}">
                <h1 class="user-name">Rosiebelt Jun Abisado</h1>
                <form>
                    <div class="input-group sidenav-search">
                        <input class="form-control" type="text" name="search" placeholder="Search...">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="sidenav-body">
                <ul class="sidenav-nav">
                    <li><a href="/cashier/profile"><span class="glyphicon glyphicon-user icons"></span>Profile</span></a></li>
                    <li><a href="javascript:void(0)" id="fees_collection"><span class="glyphicon glyphicon-list icons"></span>Fees Collection<span class="pull-right glyphicon glyphicon-menu-right" id="fees_collection_span"></span></a>
                    </li>
                    <div class="fees-category">
                        <li><a href="/cashier/collect_fees"><span class="glyphicon glyphicon-download-alt icons"></span>Collect Fees</a></li>
                        <li><a href="/cashier/miscellaneous_collection"><span class="glyphicon glyphicon-book icons"></span>Fee Categories</a></li>
                        <li><a href="/cashier/collection_settings"><span class="glyphicon glyphicon-cog icons"></span>Collection Settings</a></li>
                    </div>
                    <li><a href="#"><span class="glyphicon glyphicon-alert icons"></span>Overdues</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-list-alt icons"></span>Collection History<!--span class="pull-right glyphicon glyphicon-menu-right"--></a></li>
                </ul>
            </div>
        </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/cashier.js') }}"></script>
</body>
</html>
