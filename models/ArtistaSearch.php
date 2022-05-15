<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Artista;

/**
 * ArtistaSearch represents the model behind the search form of `app\models\Artista`.
 */
class ArtistaSearch extends Artista
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_art', 'id_sello'], 'integer'],
            [['nombre_art', 'apodo_art', 'fecha_nac_art'], 'safe'],
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
        $query = Artista::find();

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
            'id_art' => $this->id_art,
            'fecha_nac_art' => $this->fecha_nac_art,
            'id_sello' => $this->id_sello,
        ]);

        $query->andFilterWhere(['like', 'nombre_art', $this->nombre_art])
            ->andFilterWhere(['like', 'apodo_art', $this->apodo_art]);

        return $dataProvider;
    }
}
