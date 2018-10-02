<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class RevolutionAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
  		'third-party/revolution/css/settings.css',
  		'third-party/revolution/css/layers.css',
  		'third-party/revolution/css/navigation.css',
    ];
    public $js = [
  		'third-party/revolution/js/jquery.themepunch.tools.min.js?rev=5.0',
  		'third-party/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0',
  		'third-party/revolution/js/extensions/revolution.extension.actions.min.js',
  		'third-party/revolution/js/extensions/revolution.extension.carousel.min.js',
  		'third-party/revolution/js/extensions/revolution.extension.kenburn.min.js',
  		'third-party/revolution/js/extensions/revolution.extension.layeranimation.min.js',
  		'third-party/revolution/js/extensions/revolution.extension.migration.min.js',
  		'third-party/revolution/js/extensions/revolution.extension.navigation.min.js',
  		'third-party/revolution/js/extensions/revolution.extension.parallax.min.js',
  		'third-party/revolution/js/extensions/revolution.extension.slideanims.min.js',
  		'third-party/revolution/js/extensions/revolution.extension.video.min.js',
    ];
    public $depends = [
      'frontend\assets\AppAsset',
    ];
}
