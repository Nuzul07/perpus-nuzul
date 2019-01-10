@extends('layouts.logins')
@section('title')
Login
@endsection
@section('content')
<div class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 login-sec">
                <h2 class="text-center">Login Now</h2>
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="username" class="text-uppercase">Username</label>
                        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif  
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-uppercase">Password</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>

                        @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif  
                    </div>
                    <button type="submit" class="btn btn-login float-right">Submit</button>
                    <div id="register-link" class="textregis">Don't have account?<a href="{{ route('register') }}" class="float-center">Register</a></div>
                </form>
                <div id="register-link" class="textregis">Don't have account?<a href="{{ route('register') }}" class="float-center">Register</a></div>
            <div class="copy-text">Copyright &copy 2018 Nuzul Alief Haq</div>
        </div>
    </div>      
</div>
@endsection