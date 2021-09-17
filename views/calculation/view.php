<?php

use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Calculation */

$this->title = $model->calculationcol;
$this->params['breadcrumbs'][] = ['label' => Yii::t('messages', 'Calculations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="calculation-view">

    <p>
        <?= Html::a(Yii::t('messages', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('messages', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('messages', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'calculationcol',
//            'adv_prod_type_id',
            ['attribute' => 'advProdType.title', 'label' => Yii::t('messages', 'Adv Prod Type ID')],
            'product_length',
            'product_width',
            'product_height',
            'product_quantity',
//            'color_id',
            'cost',
        ],
    ]) ?>

    <?php $items = $model->calculationHasMaterials ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Материалы в расчете</h3>
                </div>
                <div class="box-body">
                    <table class="table table-striped table-bordered detail-view">
                        <tbody>
                        <tr>
                            <th><?=Yii::t('messages', 'ID')?></th>
                            <th><?=Yii::t('messages', 'Calculation ID')?></th>
                            <th><?=Yii::t('messages', 'Material ID')?></th>
                            <th><?=Yii::t('messages', 'Cost')?></th>
                            <th><?=Yii::t('messages', 'Material Count')?></th>
                            <th><?=Yii::t('messages', 'Material Length')?></th>
                            <th><?=Yii::t('messages', 'Material Width')?></th>
                            <th><?=Yii::t('messages', 'Material Height')?></th>
                            <th><?=Yii::t('messages', 'Color')?></th>

                        </tr>
                        <?php foreach ($items as $item): ?>
                            <tr>
                                <td><?= $item->id ?></td>
                                <td><?= $item->calculation->calculationcol ?></td>
                                <td><?= $item->material->materialtitle ?></td>
                                <td><?= $item->material->materialcost ?></td>
                                <td><?= $item->material_count ?></td>
                                <td><?= $item->material_length ?></td>
                                <td><?= $item->material_width ?></td>
                                <td><?= $item->material_height ?></td>
                                <td><?= $item->color->color ?></td>

                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
