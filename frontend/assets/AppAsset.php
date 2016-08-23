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
	    'css/bootstrap.css',
	    'css/bootstrap.min.css',
	    'css/agency.min.css',
	    'css/font-awesome.min.css'
    ];
    public $js = [
	        'js/jquery.js',
			'js/jquery.min.js',
		    'js/agency.min.js',
		    'js/agency.js',
	        'js/bootstrap.js',
			'js/bootstrap.min.js',
			'js/jqBootstrapValidation.js',
			'js/contact_me.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
