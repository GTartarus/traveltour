<?php

namespace backend\models\KhachHang;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KhachHang\Loai;

/**
 * LoaiSearch represents the model behind the search form of `app\models\KhachHang\Loai`.
 */
class LoaiSearch extends Loai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ML'], 'integer'],
            [['TENLOAI'], 'safe'],
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
        $query = Loai::find();

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
            'ML' => $this->ML,
        ]);

        $query->andFilterWhere(['like', 'TENLOAI', $this->TENLOAI]);

        return $dataProvider;
    }
}
