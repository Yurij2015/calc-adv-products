<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Material */

$this->title = Yii::t('messages', 'Update Material: {name}', [
    'name' => $model->materialtitle,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Materials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->materialtitle, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('messages', 'Update');
?>
<div class="material-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
