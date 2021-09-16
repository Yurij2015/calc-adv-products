<?php

use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchAdvProdType */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('messages', 'Adv Prod Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adv-prod-type-index">

    <p>
        <?= Html::a(Yii::t('messages', 'Create Adv Prod Type'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => SerialColumn::class],

            'id',
            'title',
            'description',

            ['class' => ActionColumn::class],
        ],
    ]); ?>


</div>
