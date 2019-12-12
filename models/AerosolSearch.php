<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aerosol;

/**
 * AerosolSearch represents the model behind the search form of `app\models\Aerosol`.
 */
class AerosolSearch extends Aerosol
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idaerosol', 'cantidadaerosol'], 'integer'],
            [['nombreaerosol', 'descripcionaerosol'], 'safe'],
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
        $query = Aerosol::find();

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
            'idaerosol' => $this->idaerosol,
            'cantidadaerosol' => $this->cantidadaerosol,
        ]);

        $query->andFilterWhere(['like', 'nombreaerosol', $this->nombreaerosol])
            ->andFilterWhere(['like', 'descripcionaerosol', $this->descripcionaerosol]);

        return $dataProvider;
    }
}
