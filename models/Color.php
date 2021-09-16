<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "colors".
 *
 * @property int $id
 * @property string|null $color
 *
 * @property Calculation[] $calculations
 */
class Color extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'colors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['color'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => Yii::t('messages', 'ID'),
            'color' => Yii::t('messages', 'Color'),
        ];
    }

    /**
     * Gets query for [[Calculations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalculations()
    {
        return $this->hasMany(Calculation::className(), ['color_id' => 'id']);
    }
}
