<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SelloDiscografico;

/**
 * SelloDiscograficoSearch represents the model behind the search form of `app\models\SelloDiscografico`.
 */
class SelloDiscograficoSearch extends SelloDiscografico
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sello'], 'integer'],
            [['nombre_sello', 'direccion_sello'], 'safe'],
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
        $query = SelloDiscografico::find();

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
            'id_sello' => $this->id_sello,
        ]);

        $query->andFilterWhere(['like', 'nombre_sello', $this->nombre_sello])
            ->andFilterWhere(['like', 'direccion_sello', $this->direccion_sello]);

        return $dataProvider;
    }
}
