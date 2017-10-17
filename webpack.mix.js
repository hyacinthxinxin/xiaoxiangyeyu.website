let mix = require('laravel-mix');

// css
<!-- Bootstrap 3.3.7 -->
mix.copy('vendor/bower/bootstrap/dist/css/bootstrap.min.css', 'public/assets/admin/css/');
mix.copy('vendor/bower/bootstrap/dist/css/bootstrap.min.css.map', 'public/assets/admin/css/');
<!-- Font Awesome -->
mix.copy('vendor/bower/font-awesome/css/font-awesome.min.css', 'public/assets/admin/css/');
<!-- Ionicons -->
mix.copy('vendor/bower/Ionicons/css/ionicons.min.css', 'public/assets/admin/css/');
<!-- Theme style -->
mix.copy('vendor/bower/admin-lte/dist/css/AdminLTE.min.css', 'public/assets/admin/css/');
<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
mix.copy('vendor/bower/admin-lte/dist/css/skins/_all-skins.min.css', 'public/assets/admin/css/skins/');
<!-- Morris chart -->
mix.copy('vendor/bower/morris.js/morris.css', 'public/assets/admin/css/');
<!-- jvectormap -->
mix.copy('vendor/bower/jvectormap/jquery-jvectormap.css', 'public/assets/admin/css/');
<!-- Date Picker -->
mix.copy('vendor/bower/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css', 'public/assets/admin/css/');
<!-- Daterange picker -->
mix.copy('vendor/bower/bootstrap-daterangepicker/daterangepicker.css', 'public/assets/admin/css/');
<!-- bootstrap wysihtml5 - text editor -->
mix.copy('vendor/bower/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', 'public/assets/admin/css/');
<!-- iCheck -->
mix.copy('vendor/bower/admin-lte/plugins/iCheck/square/blue.css', 'public/assets/admin/css/');

// 合并css脚本
mix.styles(
    [
        'public/assets/admin/css/bootstrap.min.css',
        'public/assets/admin/css/font-awesome.min.css',
        'public/assets/admin/css/ionicons.min.css',
        'public/assets/admin/css/AdminLTE.min.css',
        'public/assets/admin/css/blue.css',
    ],
    'public/assets/admin/css/login.css',
);

// js
<!-- jQuery 3 -->
mix.copy('vendor/bower/jquery/dist/jquery.min.js', 'public/assets/admin/js/');
<!-- jQuery UI 1.11.4 -->
mix.copy('vendor/bower/admin-lte/plugins/jQueryUI/jquery-ui.min.js', 'public/assets/admin/js/');
<!-- Bootstrap 3.3.7 -->
mix.copy('vendor/bower/bootstrap/dist/js/bootstrap.min.js', 'public/assets/admin/js/');
<!-- Morris.js charts -->
mix.copy('vendor/bower/raphael/raphael.min.js', 'public/assets/admin/js/');
mix.copy('vendor/bower/morris.js/morris.min.js', 'public/assets/admin/js/');
<!-- Sparkline -->
mix.copy('vendor/bower/jquery-sparkline/dist/jquery.sparkline.min.js', 'public/assets/admin/js/');
<!-- jvectormap -->
mix.copy('vendor/bower/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', 'public/assets/admin/js/');
mix.copy('vendor/bower/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', 'public/assets/admin/js/');
<!-- jQuery Knob Chart -->
mix.copy('vendor/bower/jquery-knob/dist/jquery.knob.min.js', 'public/assets/admin/js/');
<!-- daterangepicker -->
mix.copy('vendor/bower/moment/min/moment.min.js', 'public/assets/admin/js/');
mix.copy('vendor/bower/bootstrap-daterangepicker/daterangepicker.js', 'public/assets/admin/js/');
<!-- datepicker -->
mix.copy('vendor/bower/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js', 'public/assets/admin/js/');
<!-- Bootstrap WYSIHTML5 -->
mix.copy('vendor/bower/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', 'public/assets/admin/js/');
<!-- Slimscroll -->
mix.copy('vendor/bower/jquery-slimscroll/jquery.slimscroll.min.js', 'public/assets/admin/js/');
<!-- FastClick -->
mix.copy('vendor/bower/fastclick/lib/fastclick.js', 'public/assets/admin/js/');
<!-- AdminLTE App -->
mix.copy('vendor/bower/admin-lte/dist/js/adminlte.min.js', 'public/assets/admin/js/');
<!-- iCheck -->
mix.copy('vendor/bower/admin-lte/plugins/iCheck/icheck.min.js', 'public/assets/admin/js/');
<!-- InputMask -->
mix.copy('vendor/bower/admin-lte/plugins/input-mask/jquery.inputmask.js', 'public/assets/admin/js/');
mix.copy('vendor/bower/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js', 'public/assets/admin/js/');
mix.copy('vendor/bower/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js', 'public/assets/admin/js/');
// 合并javascript脚本
// mix.scripts(
//     [
//         'resources/assets/admin/js/jquery.min.js',
//         'resources/assets/admin/js/bootstrap.min.js',
//         'resources/assets/admin/js/icheck.min.js',
//     ],
//     'public/assets/admin/js/login.js', // 目标
// );

// font-awesome
mix.copy('vendor/bower/font-awesome/fonts/fontawesome-webfont.ttf', 'public/assets/admin/fonts/');
mix.copy('vendor/bower/font-awesome/fonts/fontawesome-webfont.woff', 'public/assets/admin/fonts/');
mix.copy('vendor/bower/font-awesome/fonts/fontawesome-webfont.woff2', 'public/assets/admin/fonts/');

// bootstrap font
mix.copy('vendor/bower/bootstrap/fonts/glyphicons-halflings-regular.ttf', 'public/assets/admin/fonts/');
mix.copy('vendor/bower/bootstrap/fonts/glyphicons-halflings-regular.woff', 'public/assets/admin/fonts/');
mix.copy('vendor/bower/bootstrap/fonts/glyphicons-halflings-regular.woff2', 'public/assets/admin/fonts/');

// images
mix.copy('vendor/bower/admin-lte/dist/img/avatar.png', 'public/assets/admin/images/');
