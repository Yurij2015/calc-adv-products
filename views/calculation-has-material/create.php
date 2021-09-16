<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CalculationHasMaterial */

$this->title = Yii::t('messages', 'Create Calculation Has Material');
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Calculation Has Materials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="calculation-has-material-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
