<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calculation_has_material".
 *
 * @property string $id
 * @property int $calculation_id
 * @property int $material_id
 * @property int|null $material_count
 * @property int|null $material_length
 * @property int|null $material_width
 * @property int|null $material_height
 *
 * @property Calculation $calculation
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
            [['id', 'calculation_id', 'material_id'], 'required'],
            [['calculation_id', 'material_id', 'material_count', 'material_length', 'material_width', 'material_height'], 'integer'],
            [['id'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['calculation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Calculation::className(), 'targetAttribute' => ['calculation_id' => 'id']],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::className(), 'targetAttribute' => ['material_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'calculation_id' => 'Calculation ID',
            'material_id' => 'Material ID',
            'material_count' => 'Material Count',
            'material_length' => 'Material Length',
            'material_width' => 'Material Width',
            'material_height' => 'Material Height',
        ];
    }

    /**
     * Gets query for [[Calculation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalculation()
    {
        return $this->hasOne(Calculation::className(), ['id' => 'calculation_id']);
    }

    /**
     * Gets query for [[Material]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::className(), ['id' => 'material_id']);
    }
}
