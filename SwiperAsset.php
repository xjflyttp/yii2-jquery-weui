<?php

namespace xj\jqweui;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class SwiperAsset extends AssetBundle
{

    public $sourcePath = '@npm/jquery-weui/dist';
    public $js = ['js/swiper.min.js'];
    public $depends = [
        'xj\jqweui\WeuiAsset',
    ];
}
