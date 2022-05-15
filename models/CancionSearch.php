<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cancion;

/**
 * CancionSearch represents the model behind the search form of `app\models\Cancion`.
 */
class CancionSearch extends Cancion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_canc', 'duracion_canc', 'id_album'], 'integer'],
            [['nombre_canc', 'anio_lanz_canc', 'escritor_canc', 'cantante_canc', 'genero_canc'], 'safe'],
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
        $query = Cancion::find();

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
            'id_canc' => $this->id_canc,
            'duracion_canc' => $this->duracion_canc,
            'anio_lanz_canc' => $this->anio_lanz_canc,
            'id_album' => $this->id_album,
        ]);

        $query->andFilterWhere(['like', 'nombre_canc', $this->nombre_canc])
            ->andFilterWhere(['like', 'escritor_canc', $this->escritor_canc])
            ->andFilterWhere(['like', 'cantante_canc', $this->cantante_canc])
            ->andFilterWhere(['like', 'genero_canc', $this->genero_canc]);

        return $dataProvider;
    }
}
