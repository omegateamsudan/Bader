@extends('layouts.login')

@section('content')

    <div class="logo">
        <a href="index.html">
            <img src="../assets/pages/img/logo-big-white.png" style="height: 17px;" alt=""/> </a>
    </div>

    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="{{ route('login') }}" method="post" novalidate="novalidate">
            @csrf
            <div class="form-title">
                <span class="form-title">Welcome.</span>
                <span class="form-subtitle">Please login.</span>
            </div>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="email"
                       placeholder="example@example.com" name="email" value="{{ old('email') }}" autofocus></div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="password"
                       placeholder="Password" name="password"></div>
            <div class="form-actions">
                <button type="submit" class="btn red btn-block uppercase">Login</button>
            </div>
        </form>
        <!-- END LOGIN FORM -->
    </div>
@endsection
