<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PriceList */
/** @var array $advprodtype_itmes */
/** @var array $advprodtype_params */

$this->title = Yii::t('messages', 'Update Price List: {name}', [
    'name' => $model->item_name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Price Lists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('messages', 'Update');
?>
<div class="price-list-update">

    <?= $this->render('_form', [
        'model' => $model,
        'advprodtype_itmes' => $advprodtype_itmes,
        'advprodtype_params' => $advprodtype_params
    ]) ?>

</div>
