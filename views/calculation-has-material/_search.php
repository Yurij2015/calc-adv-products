<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchCalculationHasMaterial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calculation-has-material-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'calculation_id') ?>

    <?= $form->field($model, 'material_id') ?>

    <?= $form->field($model, 'material_count') ?>

    <?= $form->field($model, 'material_length') ?>

    <?php // echo $form->field($model, 'material_width') ?>

    <?php // echo $form->field($model, 'material_height') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('messages', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('messages', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
