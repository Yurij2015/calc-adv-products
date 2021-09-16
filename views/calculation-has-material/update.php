<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CalculationHasMaterial */
/** @var array $dropdowndata */


$this->title = Yii::t('messages', 'Update Calculation Has Material: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Calculation Has Materials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('messages', 'Update');
?>
<div class="calculation-has-material-update">

    <?=
    $this->render('_form', [
        'model' => $model,
        'dropdowndata' => $dropdowndata
    ]) ?>

</div>
