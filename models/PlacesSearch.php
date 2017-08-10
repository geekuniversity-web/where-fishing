<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PlacesData;

/**
 * PlacesSearch represents the model behind the search form about `app\models\PlacesData`.
 */
class PlacesSearch extends Places
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['places_id', 'places_rating', 'places_type_id', 'places_location_id'], 'integer'],
            [['places_header', 'places_body', 'places_tags'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Places::find();

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
            'places_id' => $this->places_id,
            'places_rating' => $this->places_rating,
            'places_type_id' => $this->places_type_id,
            'places_location_id' => $this->places_location_id,
        ]);

        $query->andFilterWhere(['like', 'places_header', $this->places_header])
            ->andFilterWhere(['like', 'places_body', $this->places_body])
            ->andFilterWhere(['like', 'places_tags', $this->places_tags]);

        return $dataProvider;
    }
}
