<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CalculationHasMaterial */
/* @var $form yii\widgets\ActiveForm */
/** @var array $dropdowndata */
?>

<div class="calculation-has-material-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calculation_id')->dropDownList($dropdowndata['calculationdropdown']['calculation_itmes'],
        $dropdowndata['calculationdropdown']['calculation_params']) ?>

    <?= $form->field($model, 'material_id')->dropDownList($dropdowndata['materialdropdown']['material_itmes'],
        $dropdowndata['materialdropdown']['material_params']) ?>

    <?= $form->field($model, 'material_count')->textInput() ?>

    <?= $form->field($model, 'material_length')->textInput() ?>

    <?= $form->field($model, 'material_width')->textInput() ?>

    <?= $form->field($model, 'material_height')->textInput() ?>

    <?= $form->field($model, 'color_id')->dropDownList($dropdowndata['colordropdown']['color_itmes'],
        $dropdowndata['colordropdown']['color_params']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('messages', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
