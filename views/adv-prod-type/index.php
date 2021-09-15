<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchAdvProdType */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('messages', 'Adv Prod Types');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adv-prod-type-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('messages', 'Create Adv Prod Type'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
