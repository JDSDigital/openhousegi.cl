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
        'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700',
    		'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'third-party/bootstrap/css/bootstrap.min.css',
    		'third-party/font-awesome/css/font-awesome.min.css',
    		'third-party/elegant-icons/css/style.css',
    		'third-party/animate/css/animate.css',
    		// 'third-party/owl/css/owl.carousel.css',
    		// 'third-party/owl/css/owl.theme.css',
    		// 'third-party/form-validation/css/formValidation.min.css',
        'css/style.css',
        'css/master.css',
        'css/site.css',
    ];
    public $js = [
      'third-party/jquery/jquery.min.js',
  		// 'third-party/bootstrap/js/bootstrap.min.js"',
  		// 'third-party/knobs/js/jquery.knob.js',
  		// 'third-party/owl/js/owl.carousel.js',
  		// 'third-party/isotope/js/isotope.pkgd.min.js',
  		// 'third-party/counter-up/js/jquery.counterup.min.js',
  		// 'third-party/form-validation/js/formValidation.js',
  		// 'third-party/form-validation/js/framework/bootstrap.min.js',
  		// 'third-party/waypoint/js/waypoints.min.js',
  		// 'third-party/wow/js/wow.min.js',
  		// 'third-party/vticker/js/vticker.min.js',
  		// 'third-party/smooth-scroll/js/smoothScroll.js',
      // 'js/SmoothScroll.js',
      // 'js/jquery.parallax.js',
      'js/scripts.js',
      'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        // 'yii\web\JqueryAsset',
    ];
}
