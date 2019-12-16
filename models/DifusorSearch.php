<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Difusor;

/**
 * DifusorSearch represents the model behind the search form of `app\models\Difusor`.
 */
class DifusorSearch extends Difusor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddifusor', 'cantidaddifusor'], 'integer'],
            [['nombredifusor', 'descripciondifusor'], 'safe'],
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
        $query = Difusor::find();

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
            'iddifusor' => $this->iddifusor,
            'cantidaddifusor' => $this->cantidaddifusor,
        ]);

        $query->andFilterWhere(['like', 'nombredifusor', $this->nombredifusor])
            ->andFilterWhere(['like', 'descripciondifusor', $this->descripciondifusor]);

        return $dataProvider;
    }
}
