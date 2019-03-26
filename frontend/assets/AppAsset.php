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
      'common/css/open-iconic-bootstrap.min.css',
      'common/css/animate.css',
      'common/css/owl.carousel.min.css',
      'common/css/owl.theme.default.min.css',
      'common/css/magnific-popup.css',
      'common/css/aos.css',
      'common/css/ionicons.min.css',
      'common/css/bootstrap-datepicker.css',
      'common/css/jquery.timepicker.css',
      'common/css/flaticon.css',
      'common/css/icomoon.css',
      'common/css/style.css',
      'https://fonts.googleapis.com/css?family=Abril+Fatface',
      'https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700',
//'css/site.css',
//       'css/site.css',
  ];
  public $js = [
      'common/js/jquery.min.js',
      'common/js/jquery-migrate-3.0.1.min.js',
      'common/js/popper.min.js',
      'common/js/bootstrap.min.js',
      'common/js/jquery.easing.1.3.js',
      'common/js/jquery.waypoints.min.js',
      'common/js/jquery.stellar.min.js',
      'common/js/owl.carousel.min.js',
      'common/js/jquery.magnific-popup.min.js',
      'common/js/aos.js',
      'common/js/jquery.animateNumber.min.js',
      'common/js/bootstrap-datepicker.js',
      'common/js/jquery.timepicker.min.js',
      'common/js/scrollax.min.js',
      'common/js/google-map.js',
      'common/js/main.js',
      'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false',
  ];
  public $depends = [
      'yii\web\YiiAsset',
      'yii\bootstrap\BootstrapAsset',
  ];
}
