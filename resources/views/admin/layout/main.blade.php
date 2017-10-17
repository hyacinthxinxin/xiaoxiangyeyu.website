<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>潇湘夜雨 | 乐控</title>
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/assets/admin/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/assets/admin/css/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/assets/admin/css/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/assets/admin/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/assets/admin/css/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/assets/admin/css/bootstrap3-wysihtml5.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('admin.layout.header')
    @include('admin.layout.sidebar')
    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('admin.layout.footer')
    <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 3 -->
<script src="/assets/admin/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/assets/admin/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/assets/admin/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/assets/admin/js/raphael.min.js"></script>
<script src="/assets/admin/js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/assets/admin/js/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/assets/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/assets/admin/js/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/assets/admin/js/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/assets/admin/js/moment.min.js"></script>
<script src="/assets/admin/js/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/assets/admin/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/assets/admin/js/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/assets/admin/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/assets/admin/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/assets/admin/js/adminlte.min.js"></script>
@yield('script')
</body>
</html>
