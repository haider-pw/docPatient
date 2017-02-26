<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>:: DocPatient | Log in ::</title>
    <!-- Favicon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link href="assets/admin/css/main.css" rel="stylesheet">
    <link href="assets/admin/css/login.css" rel="stylesheet">

    <!-- Swift Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/admin/css/themes/all-themes.css" rel="stylesheet" />
</head>
<body class="login-page authentication">

<div class="container">
    <div class="card-top"></div>
    <div class="card">
        <h1 class="title"><span>Swift Hospital</span>Login <div class="msg">Sign in to start your session</div></h1>
        <div class="col-md-12">
            <form id="sign_in" action="{{ route('login') }}" method="POST" role="form">
                {{ csrf_field() }}
                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}"> <span class="input-group-addon"> <i class="zmdi zmdi-account"></i> </span>
                    <div class="form-line">
                        <input name="email" type="text" class="form-control" placeholder="Username" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="input-group"> <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-raised waves-effect g-bg-cyan" value="SIGN IN" />
                        <input type="button" class="btn btn-raised waves-effect" value="SIGN UP" />
                    </div>
                    <div class="text-center"> <a href="{{ route('password.request') }}">Forgot Password?</a></div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="theme-bg"></div>

<!-- Jquery Core Js -->
<script src="assets/admin/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
</body>
</html>