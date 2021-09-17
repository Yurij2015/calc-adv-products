<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Order */

$this->title = $model->ordercol;
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Orders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <p>
        <?= Html::a(Yii::t('messages', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('messages', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('messages', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'orderdate',
            'ordercol',
            'calculation.calculationcol',
            ['attribute' => 'employees.fullname', 'label' => Yii::t('messages', 'Employee FullName')],
            ['attribute' => 'customer.fullname', 'label' => Yii::t('messages', 'Customer FullName')],
        ],
    ]) ?>

</div>
