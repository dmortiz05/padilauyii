<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aceite;

/**
 * AceiteSearch represents the model behind the search form of `app\models\Aceite`.
 */
class AceiteSearch extends Aceite
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idaceite', 'cantidadaceite'], 'integer'],
            [['nombreaceite', 'descripcionaceite'], 'safe'],
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
        $query = Aceite::find();

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
            'idaceite' => $this->idaceite,
            'cantidadaceite' => $this->cantidadaceite,
        ]);

        $query->andFilterWhere(['like', 'nombreaceite', $this->nombreaceite])
            ->andFilterWhere(['like', 'descripcionaceite', $this->descripcionaceite]);

        return $dataProvider;
    }
}
