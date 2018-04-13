<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/slider.css',
        'css/main.css',
        'css/step-general.css',
        'css/custom2.css',
        'css/custom3.css',
        'css/site.css',
        'css/view-project.css',
        'css/projects.min.css',
        'css/view-project.css',
        'css/domik-details.css',
        'css/fotorama.css',
        'css/menu2.min.css',
        'css/default.css',
        'css/responsive-tables.css',
        'css/jquery.fancybox.css',






    ];
    public $js = [
        'js/analytics.js',
        'js/api.min.js',
        'js/fbevents.js',
        'js/fotorama.js',
        'js/jquery.fancybox.min.js',
        'js/jquery.form.min.js',
        'js/jquery.jgrowl.min.js',
        'js/scripts_e9bdd23784.min.js'
    ];
    public $depends = [

    ];
}
