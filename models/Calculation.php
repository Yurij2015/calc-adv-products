<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calculations".
 *
 * @property int $id
 * @property string|null $calculationcol
 * @property int $adv_prod_type_id
 * @property int|null $product_length
 * @property int|null $product_width
 * @property int|null $product_height
 * @property int|null $product_quantity
 * @property int $color_id
 * @property int|null $cost
 *
 * @property AdvProdType $advProdType
 * @property CalculationHasMaterial[] $calculationHasMaterials
 * @property Color $color
 * @property Order[] $orders
 */
class Calculation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calculations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adv_prod_type_id', 'color_id'], 'required'],
            [['adv_prod_type_id', 'product_length', 'product_width', 'product_height', 'product_quantity', 'color_id', 'cost'], 'integer'],
            [['calculationcol'], 'string', 'max' => 45],
            [['adv_prod_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdvProdType::className(), 'targetAttribute' => ['adv_prod_type_id' => 'id']],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => Color::className(), 'targetAttribute' => ['color_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('messages', 'ID'),
            'calculationcol' => Yii::t('messages', 'Calculationcol'),
            'adv_prod_type_id' => Yii::t('messages', 'Adv Prod Type ID'),
            'product_length' => Yii::t('messages', 'Product Length'),
            'product_width' => Yii::t('messages', 'Product Width'),
            'product_height' => Yii::t('messages', 'Product Height'),
            'product_quantity' => Yii::t('messages', 'Product Quantity'),
            'color_id' => Yii::t('messages', 'Color ID'),
            'cost' => Yii::t('messages', 'Cost'),
        ];
    }

    /**
     * Gets query for [[AdvProdType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdvProdType()
    {
        return $this->hasOne(AdvProdType::className(), ['id' => 'adv_prod_type_id']);
    }

    /**
     * Gets query for [[CalculationHasMaterials]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalculationHasMaterials()
    {
        return $this->hasMany(CalculationHasMaterial::className(), ['calculation_id' => 'id']);
    }

    /**
     * Gets query for [[Color]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::className(), ['id' => 'color_id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['calculation_id' => 'id']);
    }
}
