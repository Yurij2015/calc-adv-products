<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "price_list".
 *
 * @property int $id
 * @property string|null $item_name
 * @property int|null $cost
 * @property int $adv_prod_type_id
 *
 * @property AdvProdType $advProdType
 */
class PriceList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'price_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cost', 'adv_prod_type_id'], 'integer'],
            [['adv_prod_type_id'], 'required'],
            [['item_name'], 'string', 'max' => 80],
            [['adv_prod_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AdvProdType::className(), 'targetAttribute' => ['adv_prod_type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('messages', 'ID'),
            'item_name' => Yii::t('messages', 'Item Name'),
            'cost' => Yii::t('messages', 'Cost'),
            'adv_prod_type_id' => Yii::t('messages', 'Adv Prod Type ID'),
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
}
