<?php

namespace frontend\models\TOUR;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TOUR\Loaitour;

/**
 * LoaitourSearch represents the model behind the search form of `app\models\TOUR\Loaitour`.
 */
class LoaitourSearch extends Loaitour
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MALOAI'], 'integer'],
            [['TENLOAI', 'MOTA'], 'safe'],
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
        $query = Loaitour::find();

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
            'MALOAI' => $this->MALOAI,
        ]);

        $query->andFilterWhere(['like', 'TENLOAI', $this->TENLOAI])
            ->andFilterWhere(['like', 'MOTA', $this->MOTA]);

        return $dataProvider;
    }
}