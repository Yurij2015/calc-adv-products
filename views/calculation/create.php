<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Calculation */
/** @var array $advprodtype_itmes */
/** @var array $advprodtype_params */

$this->title = Yii::t('messages', 'Create Calculation');
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Calculations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calculation-create">

    <?= $this->render('_form', [
        'model' => $model,
        'advprodtype_itmes' => $advprodtype_itmes,
        'advprodtype_params' => $advprodtype_params
    ]) ?>

</div>
