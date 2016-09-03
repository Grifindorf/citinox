<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
	    '//fonts.googleapis.com/css?family=Montserrat:400,700',
	    '//fonts.googleapis.com/css?family=Kaushan+Script',
	    '//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic',
	    '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700',
	    '//fonts.googleapis.com/css?family=Open+Sans',
	    'css/bootstrap.min.css',
	    'css/modern-business.css',
	    'css/font-awesome.min.css'
    ];
    public $js = [
	    'js/jquery.js',
		'js/bootstrap.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
