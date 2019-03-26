<?php

namespace frontend\models\DangKyTour;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DangKyTour\CTDK;

/**
 * CTDKSearch represents the model behind the search form of `app\models\DangKyTour\CTDK`.
 */
class CTDKSearch extends CTDK
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSDK', 'SDT'], 'integer'],
            [['TENKH'], 'safe'],
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
        $query = CTDK::find();

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
            'MSDK' => $this->MSDK,
            'SDT' => $this->SDT,
        ]);

        $query->andFilterWhere(['like', 'TENKH', $this->TENKH]);

        return $dataProvider;
    }
}
