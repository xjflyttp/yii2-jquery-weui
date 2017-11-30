<?php

namespace xj\jqweui;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class WeuiAsset extends AssetBundle
{

    public $sourcePath = '@npm/jquery-weui/dist';
    public $css = ['css/jquery-weui.min.css'];
    public $js = ['js/jquery-weui.min.js'];
    public $depends = [
        'yii\web\JqueryAsset',
        'xj\weui\WeuiAsset',
    ];
}
