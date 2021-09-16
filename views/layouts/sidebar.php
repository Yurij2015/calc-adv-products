<?php

use yii\helpers\Html;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= $assetDir ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">CalcAdvProd</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= $assetDir ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">User: <?= Yii::$app->user->identity->username ?>
                </a>
            </div>
        </div>

        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'МЕНЮ СИСТЕМЫ РАСЧЕТА', 'header' => true],
                    ['label' => Yii::t('messages', 'Calculations'), 'icon' => 'th', 'iconClassAdded' =>
                        'text-danger', 'url' => ['calculation/index']],
                    ['label' => Yii::t('messages', 'Adv Prod Types'), 'icon' => 'list', 'iconClassAdded' => 'text-info',
                        'url' => ['adv-prod-type/index']],
                    ['label' => Yii::t('messages', 'Color'), 'icon' => 'paint-brush', 'iconClassAdded' => 'text-warning', 'url' => ['color/index']],
                    ['label' => Yii::t('messages', 'Customers'), 'icon' => 'list-alt', 'iconClassAdded' => 'text-indigo', 'url' => ['customer/index']],
                    ['label' => Yii::t('messages', 'Employees'), 'icon' => 'network-wired', 'iconClassAdded' => 'text-success', 'url' => ['employee/index']],
                    ['label' => Yii::t('messages', 'Materials'), 'icon' => 'chalkboard', 'iconClassAdded' =>
                        'text-purple', 'url' => ['material/index']],
                    ['label' => Yii::t('messages', 'Orders'), 'icon' => 'th-list', 'iconClassAdded' => 'text-pink',
                        'url' => ['order/index']],
                    ['label' => Yii::t('messages', 'Price Lists'), 'icon' => 'file-alt', 'iconClassAdded' =>
                        'text-cyan', 'url' => ['price-list/index']],
                    ['label' => Yii::t('messages', 'Calculation Has Materials'), 'icon' => 'list', 'iconClassAdded'
                    => 'text-danger', 'url' => ['calculation-has-material/index']],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>