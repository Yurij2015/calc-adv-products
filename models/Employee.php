<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "employees".
 *
 * @property int $id
 * @property string|null $fullname
 * @property string|null $email
 * @property string|null $phonenumber
 * @property int $user_id
 *
 * @property Order[] $orders
 * @property User $user
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['fullname', 'email'], 'string', 'max' => 45],
            [['phonenumber'], 'string', 'max' => 20],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => Yii::t('messages', 'ID'),
            'fullname' => Yii::t('messages', 'Fullname'),
            'email' => Yii::t('messages', 'Email'),
            'phonenumber' => Yii::t('messages', 'Phonenumber'),
            'user_id' => Yii::t('messages', 'User ID'),
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return ActiveQuery
     */
    public function getOrders(): ActiveQuery
    {
        return $this->hasMany(Order::className(), ['employees_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return ActiveQuery
     */
    public function getUser(): ActiveQuery
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
