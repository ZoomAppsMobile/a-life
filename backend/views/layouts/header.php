<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>
<header class="main-header">
    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">AsiaLife</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                
                <!-- Tasks: style can be found in dropdown.less -->
               
                <!-- User Account: style can be found in dropdown.less -->

                

                <!-- User Account: style can be found in dropdown.less -->
                <li>
                     <div class="pull-right">
                                <?= Html::a(
                                    'Выход',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-success btn-flat']
                                ) ?>
                            </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<style type="text/css">
    .main-header .logo {
    width: 270px;
}
</style>