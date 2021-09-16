<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = Yii::t('messages', 'Create Order');
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Orders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
