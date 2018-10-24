<?php
namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
//    public $jsOptions = array(
//    'position' => \yii\web\View::POS_HEAD
//    );
    public $css = [
//        'css/rstyle.css',
//        'css/style.css',+
        'css/normalize.css',
        'css/my.css',
//        'css1/main.css',
//        'st-sl/button.css',
//        'st-sl/Normalizer.css',
//        'st-sl/style.css',
//        'css1/responsive.css',
//        'login/style.css',
        'about/style.css',
//        'stylesheets2/style.css',
//        'partners_customers/style.css',
//        'client_support/style.css',
//        'stylesheets5/style.css',
//        'calc/style.css',
//        'stylesheets7/style.css',
//        'our-vacancies/style.css',
//        'stylesheets9/style.css',
//        'vacancy/style.css',
//        'calcOne/style.css',
//        'stiles/style.scss',
//        'stiles2/style.scss',
//        'stylesheets111/style.css',
        'css/office_style/style.css',
        'css/sweetalert.css',
        'zvonok/css/main.css',
        'zvonok/css/bootstrap.min.css',
    ];
    public $js = [
        'libs/jquery/dist/jquery.min.js',
        '/js/jquery.mask.js',
        'https://unpkg.com/popper.js/dist/umd/popper.min.js',
        'libs/bootstrap/dist/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js',
        'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
        'https://use.fontawesome.com/826a7e3dce.js',
        'js/script.js',
        'js/main.js',
        'js/sweetalert.min.js',
        'zvonok/js/jquery.maskedinput.min.js',
    ];
    public $depends = [
      //  'yii\web\YiiAsset',
      //  'yii\bootstrap\BootstrapAsset',
    ];


}