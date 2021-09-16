<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Color */

$this->title = Yii::t('messages', 'Create Color');
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Colors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="color-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
