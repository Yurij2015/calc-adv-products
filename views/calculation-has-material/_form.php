<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CalculationHasMaterial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calculation-has-material-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calculation_id')->textInput() ?>

    <?= $form->field($model, 'material_id')->textInput() ?>

    <?= $form->field($model, 'material_count')->textInput() ?>

    <?= $form->field($model, 'material_length')->textInput() ?>

    <?= $form->field($model, 'material_width')->textInput() ?>

    <?= $form->field($model, 'material_height')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('messages', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
