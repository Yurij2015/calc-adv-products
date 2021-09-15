<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchCalculationHasMaterial */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('messages', 'Calculation Has Materials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calculation-has-material-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('messages', 'Create Calculation Has Material'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'calculation_id',
            'material_id',
            'material_count',
            'material_length',
            //'material_width',
            //'material_height',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
