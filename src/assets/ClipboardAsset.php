<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace ziaadini\bidashboard\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for the clipboard javascript files.
 *
 * Licensed MIT © Zeno Rocha
 */
class ClipboardAsset extends AssetBundle
{
    public $sourcePath = '@ziaadini/bidashboard/assets';
    public $js = [
        'js/pjax-utility.js',
        'js/jquery.pjax.js',
        'js/custom.min.js',
        'js/utility.js',
        'js/wordcloud.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
