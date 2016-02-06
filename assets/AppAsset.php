<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/css_my.css',
        'css/bootstrap.min.css',
        'css/docs.min.css',
    ];
    public $js = [
        'https://code.jquery.com/jquery-1.11.1.min.js',
        'http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
        'js/index.js'
    ];
}
