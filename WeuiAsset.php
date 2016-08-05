<?php

namespace xj\jqweui;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class WeuiAsset extends AssetBundle
{

    public $sourcePath = '@npm/jquery-weui/dist';
    public $basePath = '@webroot/assets';
    public $js = ['js/jquery-weui.min.js'];
    public $depends = [
        'xj\weui\WeuiAsset',
    ];
}
