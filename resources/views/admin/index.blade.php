<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>潇湘夜雨 | 后台管理</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/assets/admin/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/admin/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/assets/admin/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/admin/css/AdminLTE.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition lockscreen">
<div class="lockscreen-wrapper">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-xs-12">
                <a class="btn btn-success btn-block" href="/admin/home">进入后台管理</a>
            </div>
        </div>
</div>
<script src="{{ asset ("/assets/admin/js/jquery.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("/assets/admin/js/bootstrap.min.js") }}" type="text/javascript"></script>
</body>
</html>
