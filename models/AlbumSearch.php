<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Album;

/**
 * AlbumSearch represents the model behind the search form of `app\models\Album`.
 */
class AlbumSearch extends Album
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_alb', 'num_canc_alb', 'id_artista', 'id_banda'], 'integer'],
            [['nombre_alb', 'anio_lanz'], 'safe'],
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
        $query = Album::find();

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
            'id_alb' => $this->id_alb,
            'anio_lanz' => $this->anio_lanz,
            'num_canc_alb' => $this->num_canc_alb,
            'id_artista' => $this->id_artista,
            'id_banda' => $this->id_banda,
        ]);

        $query->andFilterWhere(['like', 'nombre_alb', $this->nombre_alb]);

        return $dataProvider;
    }
}
