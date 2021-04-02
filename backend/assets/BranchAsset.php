<?php


namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Branch backend application asset bundle.
 */
class BranchAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "plugins/fontawesome-free/css/all.min.css",
        "dist/css/adminlte.min.css",
        "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700",
    ];
    public $js = [
        "plugins/jquery/jquery.min.js",
        "plugins/bootstrap/js/bootstrap.bundle.min.js",
        "dist/js/adminlte.min.js",
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}


