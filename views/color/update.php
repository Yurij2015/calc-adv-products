<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Color */

$this->title = Yii::t('messages', 'Update Color: {name}', [
    'name' => $model->color,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Colors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->color, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('messages', 'Update');
?>
<div class="color-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
