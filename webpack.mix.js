let mix = require('laravel-mix');

<!-- Bootstrap 3.3.7 -->
mix.copy('node_modules/admin-lte/node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/assets/admin/css/');
<!-- Font Awesome -->
mix.copy('node_modules/admin-lte/node_modules/font-awesome/css/font-awesome.min.css', 'public/assets/admin/css/');
<!-- ionicons -->
mix.copy('node_modules/admin-lte/node_modules/ionicons/dist/css/ionicons.min.css', 'public/assets/admin/css/');
<!-- Theme style -->
mix.copy('node_modules/admin-lte/dist/css/AdminLTE.min.css', 'public/assets/admin/css/');
<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
mix.copy('node_modules/admin-lte/dist/css/skins/_all-skins.min.css', 'public/assets/admin/css/skins/');
<!-- Morris chart -->
mix.copy('node_modules/admin-lte/node_modules/morris.js/morris.css', 'public/assets/admin/css/');
<!-- jvectormap -->
mix.copy('node_modules/admin-lte/node_modules/jvectormap/jquery-jvectormap.css', 'public/assets/admin/css/');
<!-- Date Picker -->
mix.copy('node_modules/admin-lte/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css', 'public/assets/admin/css/');
<!-- Daterange picker -->
mix.copy('node_modules/admin-lte/node_modules/bootstrap-daterangepicker/daterangepicker.css', 'public/assets/admin/css/');
<!-- bootstrap wysihtml5 - text editor -->
mix.copy('node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css', 'public/assets/admin/css/');

<!-- jQuery 3 -->
mix.copy('node_modules/admin-lte/node_modules/jquery/dist/jquery.min.js', 'public/assets/admin/js/');
<!-- jQuery UI 1.11.4 -->
mix.copy('node_modules/admin-lte/plugins/jQueryUI/jquery-ui.min.js', 'public/assets/admin/js/');
<!-- Bootstrap 3.3.7 -->
mix.copy('node_modules/admin-lte/node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/assets/admin/js/');
<!-- Morris.js charts -->
mix.copy('node_modules/admin-lte/node_modules/raphael/raphael.min.js', 'public/assets/admin/js/');
mix.copy('node_modules/admin-lte/node_modules/morris.js/morris.min.js', 'public/assets/admin/js/');
<!-- Sparkline -->
mix.copy('node_modules/admin-lte/node_modules/jquery-sparkline/jquery.sparkline.min.js', 'public/assets/admin/js/');
<!-- jvectormap -->
mix.copy('node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js', 'public/assets/admin/js/');
mix.copy('node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js', 'public/assets/admin/js/');
<!-- jQuery Knob Chart -->
mix.copy('node_modules/admin-lte/node_modules/jquery-knob/dist/jquery.knob.min.js', 'public/assets/admin/js/');
<!-- daterangepicker -->
mix.copy('node_modules/admin-lte/node_modules/moment/min/moment.min.js', 'public/assets/admin/js/');
mix.copy('node_modules/admin-lte/node_modules/bootstrap-daterangepicker/daterangepicker.js', 'public/assets/admin/js/');
<!-- datepicker -->
mix.copy('node_modules/admin-lte/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js', 'public/assets/admin/js/');
<!-- Bootstrap WYSIHTML5 -->
mix.copy('node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js', 'public/assets/admin/js/');
<!-- Slimscroll -->
mix.copy('node_modules/admin-lte/node_modules/slimscroll/lib/slimscroll.js', 'public/assets/admin/js/');
<!-- FastClick -->
mix.copy('node_modules/admin-lte/node_modules/fastclick/lib/fastclick.js', 'public/assets/admin/js/');
<!-- AdminLTE App -->
mix.copy('node_modules/admin-lte/dist/js/adminlte.min.js', 'public/assets/admin/js/');
