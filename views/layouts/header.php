<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
$username=!empty(\yii::$app->user->identity->user_name)?\yii::$app->user->identity->user_name:" ";
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
<!-- 此处显示用户名名称，或者用户编号；如：（刘文琦：20153279），或者（您好：刘文琦）                       -->
                        <span class="hidden-xs">欢迎登录：<?php echo $username;?></span>
                    </a>
                    <ul class="dropdown-menu">
<!--此处需要修改密码页面的地址-->
                        <!-- Menu Body -->
                        <li class="user-body">
                                <a href="#">修改密码</a>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                                <?= Html::a(
                                    '退出系统', ['/site/logout'],['data-method'=>'post']) ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
