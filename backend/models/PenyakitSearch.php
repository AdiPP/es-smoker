<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penyakit;

/**
 * PenyakitSearch represents the model behind the search form of `app\models\Penyakit`.
 */
class PenyakitSearch extends Penyakit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpenyakit'], 'integer'],
            [['nmpenyakit', 'definisi', 'penyebab', 'solusi'], 'safe'],
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
        $query = Penyakit::find();

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
            'idpenyakit' => $this->idpenyakit,
        ]);

        $query->andFilterWhere(['like', 'nmpenyakit', $this->nmpenyakit])
            ->andFilterWhere(['like', 'definisi', $this->definisi])
            ->andFilterWhere(['like', 'penyebab', $this->penyebab])
            ->andFilterWhere(['like', 'solusi', $this->solusi]);

        return $dataProvider;
    }
}
