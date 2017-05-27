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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cashier/cashier.css') }}">
    <script type="text/javascript" src = "{{ asset('js/script.js') }}"></script>

    <!-- Scripts -->
    
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <ul class="nav navbar-nav">
                    <li><a href="#" id="side_toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-middle">
                    <li><a class="navbar-brand" href="#">HSIS</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}" style="background: #54c0c0">Home</a></li>
                    <li><a href="/admin/class">Class</a></li>
                    <li><a href="/admin/grade">Grade</a></li>
                    @if(Auth::user()->type=="admin")
                        <li><a href="{{ url('admin/account') }}">Account</a></li>
                    @endif 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span class="glyphicon glyphicon-log-out"></span> Logout
                        </a>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                </form>
            </div>
        </nav>
        <div id="sidenav" class="sidenav">
            <div class="sidenav-header">
                <img class="profile" src="{{ asset('images/profile/'.Auth::user()->id.'.jpg') }}">
                <h1 class="user-name">{{ Auth::user()->nameOfUser() }}</h1>
                <h5 class="user-type"><i>{{ Auth::user()->type }}</i></h5>
                    <form action ="/search" method="post">
                        {{ csrf_field() }}
                        <div class="input-group sidenav-search">
                            <input class="form-control" type="text" name="search" placeholder="Search...">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default" ><span class="glyphicon glyphicon-search" ></span></button>
                            </div>
                        </div>
                    </form>
            </div>
            <div class="sidenav-body">
                <ul class="sidenav-nav">
                    @if(Auth::user()->type == 'admin')
                        <li><a href="/admin/profile/{{ Auth::user()->username }}">Profile<span class="pull-right glyphicon glyphicon-menu-right"></span></a></li>
                        <li><a href="/admin/addUser">Add User<span class="pull-right glyphicon glyphicon-menu-right"></a></li>
                        <li><a href="/admin/addStudent">Add Student<span class="pull-right glyphicon glyphicon-menu-right"></a></li>
                        <li><a href="/admin/addClass">Add Class<span class="pull-right glyphicon glyphicon-menu-right"></a></li>
                        <li><a href="/admin/addGrade">Add Grade<span class="pull-right glyphicon glyphicon-menu-right"></a></li>
                        
                    @elseif(Auth::user()->type == 'teacher')
                        <li><a href="/teacher/profile/{{ Auth::user()->username }}">Profile<span class="pull-right glyphicon glyphicon-menu-right"></span></a></li>
                        <li><a href="/teacher/schedule">Schedule<span class="pull-right glyphicon glyphicon-menu-right"></a></li>
                        <li><a href="/teacher/classRecord">Class Record<span class="pull-right glyphicon glyphicon-menu-right"></a></li>
                        <!-- <li><a href="/teacher/">Classes<span class="pull-right glyphicon glyphicon-menu-right"></a></li> -->

                    @elseif(Auth::user()->type == 'cashier')
                        <li><a href="/cashier/profile/{{ Auth::user()->username }}"><span class="glyphicon glyphicon-user icons"></span>Profile</a></li>
                        <li><a href="javascript:void(0)" id="fees_collection"><span class="glyphicon glyphicon-list icons"></span>Fees Collection<span class="pull-right glyphicon glyphicon-menu-right" id="fees_collection_span"></span></a>
                        </li>
                        <div class="fees-category">
                            <li><a href="/cashier/collect_fees"><span class="glyphicon glyphicon-download-alt icons"></span>Collect Fees</a></li>
                            <li><a href="/cashier/fee_categories"><span class="glyphicon glyphicon-book icons"></span>Fee Categories</a></li>
                        </div>
                        <li><a href="/cashier/overdues"><span class="glyphicon glyphicon-alert icons"></span>Overdues</a></li>
                        <li><a href="collection_history"><span class="glyphicon glyphicon-list-alt icons"></span>Collection History<!--span class="pull-right glyphicon glyphicon-menu-right"--></a></li>

                    @endif




                </ul>
            </div>
        </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/navigation.js') }}"></script>
    <script src="{{ asset('js/cashier/cashier.js') }}"></script>

    @stack('scripts')
</body>
</html>
