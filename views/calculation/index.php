<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCalculation */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('messages', 'Calculations');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calculation-index">

    <p>
        <?= Html::a(Yii::t('messages', 'Create Calculation'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'calculationcol',
            'adv_prod_type_id',
            'product_length',
            'product_width',
            //'product_height',
            //'product_quantity',
            //'color_id',
            //'cost',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
