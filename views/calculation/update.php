<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Calculation */
/** @var array $advprodtype_itmes */
/** @var array $advprodtype_params */

$this->title = Yii::t('messages', 'Update Calculation: {name}', [
    'name' => $model->calculationcol,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Calculations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->calculationcol, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('messages', 'Update');
?>
<div class="calculation-update">

    <?= $this->render('_form', [
        'model' => $model,
        'advprodtype_itmes' => $advprodtype_itmes,
        'advprodtype_params' => $advprodtype_params
    ]) ?>

</div>
