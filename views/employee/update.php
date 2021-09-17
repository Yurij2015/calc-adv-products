<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = Yii::t('messages', 'Update Employee: {name}', [
    'name' => $model->fullname,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Employees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fullname, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('messages', 'Update');
?>
<div class="employee-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
