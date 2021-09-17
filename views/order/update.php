<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/** @var array $orderdropdown */
$this->title = Yii::t('messages', 'Update Order: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Orders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('messages', 'Update');
?>
<div class="order-update">

    <?=
    $this->render('_form', [
        'model' => $model,
        'orderdropdown' => $orderdropdown
    ]) ?>

</div>
