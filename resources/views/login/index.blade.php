<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>潇湘夜雨 | 登录</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/css//ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/css/blue.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#">请登录</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">请登陆</p>
        <form class="form-signin" method="POST" action="/login">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <label for="inputEmail" class="sr-only">邮箱</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address"
                       required autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <label for="inputPassword" class="sr-only">密码</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                       required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            @include('layout.error')
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" value="1" name="is_remember"> 记住我
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登陆</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                Google+</a>
        </div>
        <!-- /.social-auth-links -->
        <a href="#">I forgot my password</a><br>
        <a href="/register" class="text-center">去注册</a>
    </div>
</div>
<script src="{{ asset ("/js/jquery.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/js/icheck.min.js") }}" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
