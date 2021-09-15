<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchCalculation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calculation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'calculationcol') ?>

    <?= $form->field($model, 'adv_prod_type_id') ?>

    <?= $form->field($model, 'product_length') ?>

    <?= $form->field($model, 'product_width') ?>

    <?php // echo $form->field($model, 'product_height') ?>

    <?php // echo $form->field($model, 'product_quantity') ?>

    <?php // echo $form->field($model, 'color_id') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('messages', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('messages', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
