<?php
/**
 * Created by PhpStorm.
 * User: lazhcm10343
 * Date: 3/7/15
 * Time: 6:06 PM
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class DWMainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $css = [
        'css/extralayers.css',
        'css/rs-plugin/css/settings.css',
        'css/bfassets/css/bootFolio.css',
        'css/bfassets/css/prettyPhoto.css',

        'css/font-awesome.css',
        'css/et-icons.css',
        'css/animate.min.css',
        'css/owl-carousel.css',
        'css/style.css',
        'css/dark.css',

    ];
    public $js = [
        'js/retina.js',
        'js/text-rotate.js',
        'js/wow.min.js',
        'js/jquery.stellar.js',
        'js/home-scripts.js',
        //Portfolio
        'js/jquery.isotope.min.js',
        'js/portfolio_01.js',
        //Carousel
        'js/owl.carousel.js',
        'js/owl-scripts.js',
        //SLIDER REVOLUTION 4.x SCRIPTS
        'css/rs-plugin/js/jquery.themepunch.tools.min.js',
        'css/rs-plugin/js/jquery.themepunch.revolution.min.js',
        //home
        'js/home-custom.js',
        //profile
        'js/bootstrap-pager.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}