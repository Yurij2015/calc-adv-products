<?php

use yii\grid\ActionColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPriceList */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('messages', 'Price Lists');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-list-index">

    <p>
        <?= Html::a(Yii::t('messages', 'Create Price List'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => SerialColumn::class],

            'id',
            'item_name',
            'cost',
//            'adv_prod_type_id',
            ['attribute' => 'advProdType.title','label' => Yii::t('messages', 'Adv Prod Type ID')],


            ['class' => ActionColumn::class],
        ],
    ]); ?>


</div>
