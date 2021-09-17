<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
/** @var array $orderdropdown */

?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'orderdate')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'ordercol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calculation_id')->dropDownList($orderdropdown['calculationdropdown']['calculation_itmes'], $orderdropdown['calculationdropdown']['calculation_params']) ?>

    <?= $form->field($model, 'employees_id')->dropDownList($orderdropdown['employeedropdown']['calculation_itmes'],
        $orderdropdown['employeedropdown']['calculation_params']) ?>

    <?= $form->field($model, 'customer_id')->dropDownList($orderdropdown['customerdropdown']['calculation_itmes'],
        $orderdropdown['customerdropdown']['calculation_params']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('messages', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
