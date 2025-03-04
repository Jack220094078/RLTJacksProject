<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Footer-Multi-Column-icons.css')}}">
</head>
<body id="page-top">
<div id="wrapper">
<nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark" style="text-align: left;">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#"><img src="assets/img/Logo%20for%20Project.jpg" width="77" height="78" style="text-align: left;">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="{{route('home')}}" style="text-align: left;"><i class="fas fa-home" style="background: url(&quot;assets/img/Home%20icon.png&quot;);font-size: 13px;"></i><span>Home</span></a></li>
                    <li class="nav-item">
                        @guest
                        <a class="nav-link" href="{{route('login')}}" style="text-align: left;"><i class="far fa-user-circle"></i><span>Login</span></a>
                        @endguest
                        <a class="nav-link" href="{{route('profile')}}" style="text-align: left;"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('joinroom')}}" style="text-align: left;"><i class="fas fa-layer-group" style="font-size: 13px;"></i><span>Join Room</span></a>
                        <a class="nav-link" href="{{route('modules')}}" style="text-align: left;"><i class="fas fa-user-circle"></i><span><span style="font-weight: normal !important;">Modules</span></span></a>
                        <a class="nav-link" href="{{route('Q&A')}}" style="text-align: left;"><i class="far fa-question-circle" style="font-size: 13px;"></i><span>Q&amp;A Section</span></a>
                    </li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
