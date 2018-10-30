<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/29
 * Time: 13:19
 */

namespace app\assets;
use yii\web\AssetBundle;

//依赖bootstrap做的一个登录页面

class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'login_html\css\bootstrap.min.css',
        'login_html\css\htmleaf-demo.css',
        'login_html\css\signin.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}