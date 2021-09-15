<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Order;

/**
 * SearchOrder represents the model behind the search form of `app\models\Order`.
 */
class SearchOrder extends Order
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'calculation_id', 'employees_id', 'customer_id'], 'integer'],
            [['orderdate', 'ordercol'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Order::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'orderdate' => $this->orderdate,
            'calculation_id' => $this->calculation_id,
            'employees_id' => $this->employees_id,
            'customer_id' => $this->customer_id,
        ]);

        $query->andFilterWhere(['like', 'ordercol', $this->ordercol]);

        return $dataProvider;
    }
}
