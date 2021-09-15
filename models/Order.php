<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string|null $orderdate
 * @property string|null $ordercol
 * @property int $calculation_id
 * @property int $employees_id
 * @property int $customer_id
 *
 * @property Calculation $calculation
 * @property Customer $customer
 * @property Employee $employees
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderdate'], 'safe'],
            [['calculation_id', 'employees_id', 'customer_id'], 'required'],
            [['calculation_id', 'employees_id', 'customer_id'], 'integer'],
            [['ordercol'], 'string', 'max' => 45],
            [['calculation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Calculation::className(), 'targetAttribute' => ['calculation_id' => 'id']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
            [['employees_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employees_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'orderdate' => 'Orderdate',
            'ordercol' => 'Ordercol',
            'calculation_id' => 'Calculation ID',
            'employees_id' => 'Employees ID',
            'customer_id' => 'Customer ID',
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
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[Employees]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employees_id']);
    }
}
