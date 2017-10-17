<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>潇湘夜雨 | 后台登录</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/login.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#">管理后台</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">登陆</p>
        <form action="/admin/login" method="post">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <input name="name" type="text" class="form-control" placeholder="名字">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="密码">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            @include('admin.layout.error')
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登陆</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset ("/assets/admin/js/jquery.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/assets/admin/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/assets/admin/js/icheck.min.js") }}" type="text/javascript"></script>
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
