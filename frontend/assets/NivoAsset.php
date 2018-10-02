<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class NivoAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
  		'third-party/nivo-lightbox/css/nivo-lightbox.css',
  		'third-party/nivo-lightbox/themes/default/default.css',
      'third-party/nivo-slider/themes/default/default.css',
  		'third-party/nivo-slider/themes/light/light.css',
  		'third-party/nivo-slider/themes/dark/dark.css',
  		'third-party/nivo-slider/themes/bar/bar.css',
  		'third-party/nivo-slider/css/nivo-slider.css',
    ];
    public $js = [
  		'third-party/nivo-lightbox/js/nivo-lightbox.min.js',
      'third-party/nivo-slider/js/jquery.nivo.slider.js',
    ];
    public $depends = [
      'frontend\assets\AppAsset',
    ];
}
