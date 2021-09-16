<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CalculationHasMaterial;

/**
 * SearchCalculationHasMaterial represents the model behind the search form of `app\models\CalculationHasMaterial`.
 */
class SearchCalculationHasMaterial extends CalculationHasMaterial
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'safe'],
            [['calculation_id', 'material_id', 'material_count', 'material_length', 'material_width', 'material_height', 'color_id'], 'integer'],
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
        $query = CalculationHasMaterial::find();

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
            'calculation_id' => $this->calculation_id,
            'material_id' => $this->material_id,
            'material_count' => $this->material_count,
            'material_length' => $this->material_length,
            'material_width' => $this->material_width,
            'material_height' => $this->material_height,
            'color_id' => $this->color_id,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id]);

        return $dataProvider;
    }
}
