<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "adv_prod_types".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 *
 * @property Calculation[] $calculations
 * @property PriceList[] $priceLists
 */
class AdvProdType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'adv_prod_types';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['title'], 'string', 'max' => 145],
            [['description'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Calculations]].
     *
     * @return ActiveQuery
     */
    public function getCalculations(): ActiveQuery
    {
        return $this->hasMany(Calculation::className(), ['adv_prod_type_id' => 'id']);
    }

    /**
     * Gets query for [[PriceLists]].
     *
     * @return ActiveQuery
     */
    public function getPriceLists(): ActiveQuery
    {
        return $this->hasMany(PriceList::className(), ['adv_prod_type_id' => 'id']);
    }
}
