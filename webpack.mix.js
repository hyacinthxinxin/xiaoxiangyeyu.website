let mix = require('laravel-mix');

// jQuery
mix.copy('node_modules/admin-lte/plugins/jQuery/jquery-2.2.3.min.js', 'resources/assets/js/admin-lte/');

// bootstarp
mix.copy('node_modules/admin-lte/bootstrap/css/bootstrap.min.css', 'resources/assets/css/admin-lte/');
mix.copy('node_modules/admin-lte/bootstrap/js/bootstrap.min.js', 'resources/assets/js/admin-lte/');
// bootstarp fonts
mix.copy('node_modules/admin-lte/bootstrap/fonts/glyphicons-halflings-regular.ttf', 'public/assets/fonts/');
mix.copy('node_modules/admin-lte/bootstrap/fonts/glyphicons-halflings-regular.woff', 'public/assets/fonts/');
mix.copy('node_modules/admin-lte/bootstrap/fonts/glyphicons-halflings-regular.woff2', 'public/assets/fonts/');

// AdminLTE
mix.copy('node_modules/admin-lte/dist/css/AdminLTE.min.css', 'resources/assets/css/admin-lte/');
mix.copy('node_modules/admin-lte/dist/css/skins/skin-blue.min.css', 'resources/assets/css/admin-lte/');
mix.copy('node_modules/admin-lte/dist/js/app.min.js', 'resources/assets/js/admin-lte/');
mix.copy('node_modules/admin-lte/dist/img/*', 'public/assets/img/admin/');

// iCheck
mix.copy('node_modules/admin-lte/plugins/iCheck/icheck.min.js', 'resources/assets/js/admin-lte/');
mix.copy('node_modules/admin-lte/plugins/iCheck/square/blue.css', 'resources/assets/css/admin-lte/');
mix.copy('node_modules/admin-lte/plugins/iCheck/square/blue.png', 'public/assets/css/');
mix.copy('node_modules/admin-lte/plugins/iCheck/square/blue@2x.png', 'public/assets/css/');

// 合并javascript脚本
mix.scripts(
    [
        'resources/assets/js/admin-lte/jquery-2.2.3.min.js',
        'resources/assets/js/admin-lte/bootstrap.min.js',
        'resources/assets/js/admin-lte/app.min.js',
        'resources/assets/js/admin-lte/icheck.min.js',
    ],
    'public/assets/js/admin.js', // 目标
    // 'resources/assets/js/admin-lte/' // 原始目录
);

// 合并css脚本
mix.styles(
    [
        'resources/assets/css/admin-lte/bootstrap.min.css',
        'resources/assets/css/admin-lte/AdminLTE.min.css',
        'resources/assets/css/admin-lte/skin-blue.min.css',
        'resources/assets/css/admin-lte/blue.css',
    ],
    'public/assets/css/admin.css',
);


// version 方法接收文件名称相对于 public 目录，并且它会自动的为文件名增加一个独特的 hash，这样就可以自动的进行缓存清除了。
// mix.version(['assets/js/admin.js', 'assets/css/admin.css']);
