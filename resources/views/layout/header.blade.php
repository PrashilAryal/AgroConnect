@extends('layout.app')
@section('contents')
<link href="{{ asset('css/header.css') }}" rel="stylesheet">
@if ($data != null)
<form action="">
    <input type="hidden" name="location" id="location" value="{{ $data->location }}">
</form>
@else
<form action="">
    <input type="hidden" name="location" id="location" value="">
</form>
@endif
<section class="navbar">
    <h1>AgroConnect</h1>
    <div class="nav-links">
        <ul>
            <li><a href="{{url('/home')}}">Home</a></li>
            <li><a href="{{url('/farmer-service')}}">Service</a></li>
            <li><a href="{{url('/farmer-product')}}">Product</a></li>
            <li><a href="{{url('/farmer-course')}}">Course</a></li>
            <li><a href="{{url('/farmer-calender')}}">Calender</a></li>
            <li><a href="{{url('/farmer-seasonal-worker')}}">Seasonal Worker</a></li>
            <li><a href="{{url('/farmer-loan-apply')}}">Apply Loan</a></li>
        </ul>
    </div>
    <div class="login-and-signup">
        @if ($data == null)
        <a href="{{ route('signup') }}" class="signIn">Sign in</a>
        <a href="{{ route('login') }}" class="logIn">Log in</a>
        @else
        <a href="{{ route('logout') }}" class="logIn">Log out</a>
        @endif
    </div>
</section>
<!-- <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="left">
                        <img width="50" class="navbar-brand" src="{{ asset('../images/agriculture.png') }}" alt="">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page">Recipe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </a>


                            <ul class="dropdown-menu" style="z-index:9999 !important" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item">Dashboard</a></li>
                            </ul>
                        </li>
                    </ul>

                    @if ($data == null)
    <div>

                            <a class="btn" href="signup">SignUp</a>
                            <a class="btn" href="login">Login</a>
                        </div>
@else
    <div class="user">
                            <img width="30" class="navbar-brand" src="{{ asset('../images/user.png') }}" alt="">

                            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" >
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ $data->name }}
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-dark" style="z-index: 999" aria-labelledby="navbarDarkDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Profile</a></li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
    @endif
                </div>
            </div>
        </nav> -->
@yield('homeContents')
@endsection