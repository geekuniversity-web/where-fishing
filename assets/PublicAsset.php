<?php

namespace app\assets;

use yii\web\AssetBundle;

class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'styles/theme-minimal/jcf.css',
        'styles/style.css'
    ];
    public $js = [
        'js/jquery.js',
        'js/jcf.js',
        'js/jcf.select.js'
    ];
}
