<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>潇湘夜雨</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
    @include('layout.header')
    <div class="content-wrapper">
        <div class="container">
            @yield('content')
        </div>
    </div>
    @include('layout.footer')
</div>

{{--@include("layout.nav")--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--@yield('content')--}}
{{--@include("layout.sidebar")--}}
{{--</div>--}}
{{--</div>--}}
{{--@include("layout.footer")--}}

<!-- jQuery 3 -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('/js/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('/js/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src="../../dist/js/demo.js"></script>--}}
{{--<script src="/js/ylaravel.js?v=".time() type="text/javascript"></script>--}}
</body>
</html>
