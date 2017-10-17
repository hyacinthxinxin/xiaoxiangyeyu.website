let mix = require('laravel-mix');

// css
<!-- Bootstrap 3.3.7 -->
mix.copy('vendor/bower/bootstrap/dist/css/bootstrap.min.css', 'public/css/');
mix.copy('vendor/bower/bootstrap/dist/css/bootstrap.min.css.map', 'public/css/');
<!-- Font Awesome -->
mix.copy('vendor/bower/font-awesome/css/font-awesome.min.css', 'public/css/');
<!-- Ionicons -->
mix.copy('vendor/bower/Ionicons/css/ionicons.min.css', 'public/css/');
<!-- Theme style -->
mix.copy('vendor/bower/admin-lte/dist/css/AdminLTE.min.css', 'public/css/');
<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
mix.copy('vendor/bower/admin-lte/dist/css/skins/_all-skins.min.css', 'public/css/skins/');
<!-- Morris chart -->
mix.copy('vendor/bower/morris.js/morris.css', 'public/css/');
<!-- jvectormap -->
mix.copy('vendor/bower/jvectormap/jquery-jvectormap.css', 'public/css/');
<!-- Date Picker -->
mix.copy('vendor/bower/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css', 'public/css/');
<!-- Daterange picker -->
mix.copy('vendor/bower/bootstrap-daterangepicker/daterangepicker.css', 'public/css/');
<!-- bootstrap wysihtml5 - text editor -->
mix.copy('vendor/bower/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', 'public/css/');
<!-- iCheck -->
mix.copy('vendor/bower/admin-lte/plugins/iCheck/square/blue.css', 'public/css/');
mix.copy('vendor/bower/admin-lte/plugins/iCheck/square/blue@2x.png', 'public/css/');

// 合并css脚本
mix.styles(
    [
        'public/css/bootstrap.min.css',
        'public/css/font-awesome.min.css',
        'public/css/ionicons.min.css',
        'public/css/AdminLTE.min.css',
        'public/css/blue.css',
    ],
    'public/css/admin.login.css',
);

// js
<!-- jQuery 3 -->
mix.copy('vendor/bower/jquery/dist/jquery.min.js', 'public/js/');
<!-- jQuery UI 1.11.4 -->
mix.copy('vendor/bower/admin-lte/plugins/jQueryUI/jquery-ui.min.js', 'public/js/');
<!-- Bootstrap 3.3.7 -->
mix.copy('vendor/bower/bootstrap/dist/js/bootstrap.min.js', 'public/js/');
<!-- Morris.js charts -->
mix.copy('vendor/bower/raphael/raphael.min.js', 'public/js/');
mix.copy('vendor/bower/morris.js/morris.min.js', 'public/js/');
<!-- Sparkline -->
mix.copy('vendor/bower/jquery-sparkline/dist/jquery.sparkline.min.js', 'public/js/');
<!-- jvectormap -->
mix.copy('vendor/bower/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', 'public/js/');
mix.copy('vendor/bower/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', 'public/js/');
<!-- jQuery Knob Chart -->
mix.copy('vendor/bower/jquery-knob/dist/jquery.knob.min.js', 'public/js/');
<!-- daterangepicker -->
mix.copy('vendor/bower/moment/min/moment.min.js', 'public/js/');
mix.copy('vendor/bower/bootstrap-daterangepicker/daterangepicker.js', 'public/js/');
<!-- datepicker -->
mix.copy('vendor/bower/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js', 'public/js/');
<!-- Bootstrap WYSIHTML5 -->
mix.copy('vendor/bower/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', 'public/js/');
<!-- Slimscroll -->
mix.copy('vendor/bower/jquery-slimscroll/jquery.slimscroll.min.js', 'public/js/');
<!-- FastClick -->
mix.copy('vendor/bower/fastclick/lib/fastclick.js', 'public/js/');
<!-- AdminLTE App -->
mix.copy('vendor/bower/admin-lte/dist/js/adminlte.min.js', 'public/js/');
<!-- iCheck -->
mix.copy('vendor/bower/admin-lte/plugins/iCheck/icheck.min.js', 'public/js/');
<!-- InputMask -->
mix.copy('vendor/bower/admin-lte/plugins/input-mask/jquery.inputmask.js', 'public/js/');
mix.copy('vendor/bower/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js', 'public/js/');
mix.copy('vendor/bower/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js', 'public/js/');
// 合并javascript脚本
// mix.scripts(
//     [
//         'resources/admin/js/jquery.min.js',
//         'resources/admin/js/bootstrap.min.js',
//         'resources/admin/js/icheck.min.js',
//     ],
//     'public/admin/js/login.js', // 目标
// );

// font-awesome
mix.copy('vendor/bower/font-awesome/fonts/fontawesome-webfont.ttf', 'public/fonts/');
mix.copy('vendor/bower/font-awesome/fonts/fontawesome-webfont.woff', 'public/fonts/');
mix.copy('vendor/bower/font-awesome/fonts/fontawesome-webfont.woff2', 'public/fonts/');

// bootstrap font
mix.copy('vendor/bower/bootstrap/fonts/glyphicons-halflings-regular.ttf', 'public/fonts/');
mix.copy('vendor/bower/bootstrap/fonts/glyphicons-halflings-regular.woff', 'public/fonts/');
mix.copy('vendor/bower/bootstrap/fonts/glyphicons-halflings-regular.woff2', 'public/fonts/');

// images
mix.copy('vendor/bower/admin-lte/dist/img/avatar.png', 'public/images/admin/');
mix.copy('vendor/bower/admin-lte/dist/img/user2-160x160.jpg', 'public/images/');
