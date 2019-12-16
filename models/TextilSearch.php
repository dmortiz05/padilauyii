<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Textil;

/**
 * TextilSearch represents the model behind the search form of `app\models\Textil`.
 */
class TextilSearch extends Textil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idtextil', 'cantidadtextil'], 'integer'],
            [['nombretextil', 'descripciontextil'], 'safe'],
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
        $query = Textil::find();

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
            'idtextil' => $this->idtextil,
            'cantidadtextil' => $this->cantidadtextil,
        ]);

        $query->andFilterWhere(['like', 'nombretextil', $this->nombretextil])
            ->andFilterWhere(['like', 'descripciontextil', $this->descripciontextil]);

        return $dataProvider;
    }
}
