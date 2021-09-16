<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PriceList */

$this->title = Yii::t('messages', 'Create Price List');
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Price Lists'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-list-create">

    <?= $this->render('_form', [
        'model' => $model,
        'advprodtype_itmes' => $advprodtype_itmes,
        'advprodtype_params' => $advprodtype_params
    ]) ?>
</div>
