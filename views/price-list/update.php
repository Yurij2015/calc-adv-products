<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PriceList */

$this->title = Yii::t('messages', 'Update Price List: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Price Lists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('messages', 'Update');
?>
<div class="price-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>