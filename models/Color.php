<?php

namespace app\models;

use phpDocumentor\Reflection\Types\Mixed_;
use Yii;
use yii\db\ActiveQuery;

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
    public static function tableName(): string
    {
        return 'colors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
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
     * @return ActiveQuery
     */
    public function getCalculations(): ActiveQuery
    {
        return $this->hasMany(Calculation::className(), ['color_id' => 'id']);
    }
}
