@extends('layouts.logins')
@section('title')
Register
@endsection
@section('content')
<div class="regis-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 regis-sec">
                <h2 class="text-center">Register Now</h2>
                <form class="login-form" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="username" class="text-uppercase">Username</label>
                        <input id="username" type="text" class="form-control" name="username" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-uppercase">Email</label>
                        <input id="email" type="email" class="form-control" name="email" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-uppercase">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="text-uppercase">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autofocus>
                    </div>

                    <button type="submit" class="btn btn-login float-right">Submit</button>
                </form>
                <div id="register-link" class="textregis">Have account?<a href="{{ route('login') }}" class="float-center">Login</a></div>
            <div class="copy-text">Copyright &copy 2018 Nuzul Alief Haq</div>
        </div>
    </div>      
</div>
@endsection
