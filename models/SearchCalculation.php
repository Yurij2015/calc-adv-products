<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Calculation;

/**
 * SearchCalculation represents the model behind the search form of `app\models\Calculation`.
 */
class SearchCalculation extends Calculation
{
    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['id', 'adv_prod_type_id', 'product_length', 'product_width', 'product_height', 'product_quantity', 'color_id', 'cost'], 'integer'],
            [['calculationcol'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios(): array
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
    public function search(array $params): ActiveDataProvider
    {
        $query = Calculation::find();

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
            'adv_prod_type_id' => $this->adv_prod_type_id,
            'product_length' => $this->product_length,
            'product_width' => $this->product_width,
            'product_height' => $this->product_height,
            'product_quantity' => $this->product_quantity,
            'color_id' => $this->color_id,
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'calculationcol', $this->calculationcol]);

        return $dataProvider;
    }
}
