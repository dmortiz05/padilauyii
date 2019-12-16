<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Difusorpremium;

/**
 * DifusorpremiumSearch represents the model behind the search form of `app\models\Difusorpremium`.
 */
class DifusorpremiumSearch extends Difusorpremium
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['iddifusorpremium', 'cantidaddifusorpremium'], 'integer'],
            [['nombredifusorpremium', 'descripciondifusorpremium'], 'safe'],
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
        $query = Difusorpremium::find();

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
            'iddifusorpremium' => $this->iddifusorpremium,
            'cantidaddifusorpremium' => $this->cantidaddifusorpremium,
        ]);

        $query->andFilterWhere(['like', 'nombredifusorpremium', $this->nombredifusorpremium])
            ->andFilterWhere(['like', 'descripciondifusorpremium', $this->descripciondifusorpremium]);

        return $dataProvider;
    }
}
