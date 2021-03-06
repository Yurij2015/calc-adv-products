<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "calculation_has_material".
 *
 * @property int $id
 * @property int $calculation_id
 * @property int $material_id
 * @property int|null $material_count
 * @property int|null $material_length
 * @property int|null $material_width
 * @property int|null $material_height
 * @property int $color_id
 *
 * @property Calculation $calculation
 * @property Color $color
 * @property Material $material
 */
class CalculationHasMaterial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calculation_has_material';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calculation_id', 'material_id', 'color_id'], 'required'],
            [['calculation_id', 'material_id', 'material_count', 'material_length', 'material_width', 'material_height', 'color_id'], 'integer'],
            [['calculation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Calculation::className(), 'targetAttribute' => ['calculation_id' => 'id']],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => Color::className(), 'targetAttribute' => ['color_id' => 'id']],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['material_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('messages', 'ID'),
            'calculation_id' => Yii::t('messages', 'Calculation ID'),
            'material_id' => Yii::t('messages', 'Material ID'),
            'material_count' => Yii::t('messages', 'Material Count'),
            'material_length' => Yii::t('messages', 'Material Length'),
            'material_width' => Yii::t('messages', 'Material Width'),
            'material_height' => Yii::t('messages', 'Material Height'),
            'color_id' => Yii::t('messages', 'Color ID'),
        ];
    }

    /**
     * Gets query for [[Calculation]].
     *
     * @return ActiveQuery
     */
    public function getCalculation(): ActiveQuery
    {
        return $this->hasOne(Calculation::className(), ['id' => 'calculation_id']);
    }

    /**
     * Gets query for [[Color]].
     *
     * @return ActiveQuery
     */
    public function getColor(): ActiveQuery
    {
        return $this->hasOne(Color::className(), ['id' => 'color_id']);
    }

    /**
     * Gets query for [[Material]].
     *
     * @return ActiveQuery
     */
    public function getMaterial(): ActiveQuery
    {
        return $this->hasOne(Material::className(), ['id' => 'material_id']);
    }

    public function materialPrice()
    {
        return ($this->material->materialcost ?: 0) * ($this->material_count ?: 1) *
            ($this->material_length ?: 1) * ($this->material_height ?: 1) * ($this->material_width ?: 1);
    }
}
