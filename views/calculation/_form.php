<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Calculation */
/* @var $form yii\widgets\ActiveForm */
/** @var array $advprodtype_itmes */
/** @var array $advprodtype_params */
?>

<div class="calculation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'calculationcol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adv_prod_type_id')->dropDownList($advprodtype_itmes, $advprodtype_params) ?>

    <?= $form->field($model, 'product_length')->textInput() ?>

    <?= $form->field($model, 'product_width')->textInput() ?>

    <?= $form->field($model, 'product_height')->textInput() ?>

    <?= $form->field($model, 'product_quantity')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('messages', 'Calculation and Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
