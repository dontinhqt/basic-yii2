<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css',
    ];
    public $js = [
        'https://code.jquery.com/jquery-3.3.1.js',
        'https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js',
        'https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
        'https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
