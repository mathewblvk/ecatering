<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        "https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css",
        "plugins/fontawesome-free/css/all.min.css",
        "plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
        "plugins/icheck-bootstrap/icheck-bootstrap.min.css",
        "plugins/jqvmap/jqvmap.min.css",
        "plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
        "plugins/daterangepicker/daterangepicker.css",
        "plugins/summernote/summernote-bs4.css",
        "dist/css/adminlte.min.css",
    ];
    public $js = [
        "app.js",
        "plugins/jquery-ui/jquery-ui.min.js",
        "plugins/chart.js/Chart.min.js",
        "plugins/bootstrap4/js/bootstrap.bundle.min.js",
        "dist/js/adminlte.js",
//        "dist/js/pages/dashboard.js",
        "plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
        "plugins/summernote/summernote-bs4.min.js",
        "plugins/daterangepicker/daterangepicker.js",
        "plugins/moment/moment.min.js",
        "plugins/jquery-knob/jquery.knob.min.js",
//        "plugins/jqvmap/jquery.vmap.min.js",
        "plugins/sparklines/sparkline.js",
        "plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
        "dist/js/demo.js",
        'js/site.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'fedemotta\datatables\DataTablesAsset',
    ];
}
