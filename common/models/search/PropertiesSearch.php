<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Properties;

/**
 * PropertiesSearch represents the model behind the search form of `common\models\Properties`.
 */
class PropertiesSearch extends Properties
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type_id', 'contract_id', 'title', 'summary', 'featured', 'rooms', 'toilets', 'garage', 'city', 'visits', 'taken', 'status', 'createdAt', 'updatedAt'], 'integer'],
            [['description', 'address'], 'safe'],
            [['price', 'area', 'long', 'lat'], 'number'],
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
        $query = Properties::find();

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
            'id' => $this->id,
            'type_id' => $this->type_id,
            'contract_id' => $this->contract_id,
            'title' => $this->title,
            'summary' => $this->summary,
            'price' => $this->price,
            'featured' => $this->featured,
            'area' => $this->area,
            'rooms' => $this->rooms,
            'toilets' => $this->toilets,
            'garage' => $this->garage,
            'city' => $this->city,
            'long' => $this->long,
            'lat' => $this->lat,
            'visits' => $this->visits,
            'taken' => $this->taken,
            'status' => $this->status,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
