<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sensacion;

/**
 * SensacionSearch represents the model behind the search form of `app\models\Sensacion`.
 */
class SensacionSearch extends Sensacion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idsensacion', 'cantidadsensacion'], 'integer'],
            [['nombresensacion'], 'safe'],
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
        $query = Sensacion::find();

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
            'idsensacion' => $this->idsensacion,
            'cantidadsensacion' => $this->cantidadsensacion,
        ]);

        $query->andFilterWhere(['like', 'nombresensacion', $this->nombresensacion]);

        return $dataProvider;
    }
}
