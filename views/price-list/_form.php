<?php

use app\models\AdvProdType;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PriceList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="price-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'adv_prod_type_id')->dropDownList($advprodtype_itmes, $advprodtype_params) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('messages', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
