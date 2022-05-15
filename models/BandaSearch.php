<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Banda;

/**
 * BandaSearch represents the model behind the search form of `app\models\Banda`.
 */
class BandaSearch extends Banda
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_band', 'id_sello'], 'integer'],
            [['nombre_band', 'miembros', 'fecha_crea_band'], 'safe'],
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
        $query = Banda::find();

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
            'id_band' => $this->id_band,
            'fecha_crea_band' => $this->fecha_crea_band,
            'id_sello' => $this->id_sello,
        ]);

        $query->andFilterWhere(['like', 'nombre_band', $this->nombre_band])
            ->andFilterWhere(['like', 'miembros', $this->miembros]);

        return $dataProvider;
    }
}
