<?php

namespace xj\jqweui;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class CityPickerAsset extends AssetBundle
{

    public $sourcePath = '@npm/jquery-weui/dist';
    public $basePath = '@webroot/assets';
    public $js = ['js/city-picker.min.js'];
    public $depends = [
        'xj\jqweui\WeuiAsset',
    ];
}
