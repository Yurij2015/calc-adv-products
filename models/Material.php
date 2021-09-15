<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materials".
 *
 * @property int $id
 * @property string|null $materialtitle
 * @property int|null $materialcost
 *
 * @property CalculationHasMaterial[] $calculationHasMaterials
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['materialcost'], 'integer'],
            [['materialtitle'], 'string', 'max' => 85],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'materialtitle' => 'Materialtitle',
            'materialcost' => 'Materialcost',
        ];
    }

    /**
     * Gets query for [[CalculationHasMaterials]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalculationHasMaterials()
    {
        return $this->hasMany(CalculationHasMaterial::className(), ['material_id' => 'id']);
    }
}
