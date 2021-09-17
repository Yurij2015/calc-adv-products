<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdvProdType */

$this->title = Yii::t('messages', 'Update Adv Prod Type: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Adv Prod Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('messages', 'Update');
?>
<div class="adv-prod-type-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
