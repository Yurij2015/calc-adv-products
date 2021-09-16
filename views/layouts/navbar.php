<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= Url::home() ?>" class="nav-link">Главная</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a(Yii::t('messages', 'Calculations'), ['calculation/index'], ['class' => 'nav-link']) ?>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a(Yii::t('messages', 'Adv Prod Types'), ['calculation/index'], ['class' => 'nav-link']) ?>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a(Yii::t('messages', 'Color'), ['calculation/index'], ['class' => 'nav-link']) ?>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a(Yii::t('messages', 'Materials'), ['calculation/index'], ['class' => 'nav-link']) ?>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a(Yii::t('messages', 'Orders'), ['calculation/index'], ['class' => 'nav-link']) ?>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <?= Html::a(Yii::t('messages', 'Price Lists'), ['calculation/index'], ['class' => 'nav-link']) ?>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <?= Html::a('<i class="fas fa-sign-out-alt"></i>', ['/site/logout'], ['data-method' => 'post', 'class' => 'nav-link']) ?>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->