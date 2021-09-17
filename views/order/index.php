<?php

use yii\grid\ActionColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchOrder */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('messages', 'Orders');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <p>
        <?= Html::a(Yii::t('messages', 'Create Order'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => SerialColumn::class],

            'id',
            'orderdate',
            'ordercol',
            'calculation.calculationcol',
            'employees.fullname',
            'customer.fullname',

            ['class' => ActionColumn::class],
        ],
    ]); ?>


</div>
