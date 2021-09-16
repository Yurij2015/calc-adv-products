<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchMaterial */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('messages', 'Materials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="material-index">

    <p>
        <?= Html::a(Yii::t('messages', 'Create Material'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'materialtitle',
            'materialcost',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
