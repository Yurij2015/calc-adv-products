<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdvProdType */

$this->title = Yii::t('messages', 'Create Adv Prod Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Adv Prod Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adv-prod-type-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
