<?php

use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Calculation */

$this->title = $model->calculationcol;
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Calculations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="calculation-view">

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
            'calculationcol',
//            'adv_prod_type_id',
            ['attribute' => 'advProdType.title', 'label' => Yii::t('messages', 'Adv Prod Type ID')],
            'product_length',
            'product_width',
            'product_height',
            'product_quantity',
//            'color_id',
            'cost',
        ],
    ]) ?>

</div>
