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
            [['id', 'type_id', 'contract_id', 'featured', 'rooms', 'toilets', 'garage', 'zone', 'visits', 'taken', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'summary', 'description', 'address'], 'safe'],
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

        if (Yii::$app->id == 'app-frontend') {
          $query->where(['status' => Properties::STATUS_ACTIVE])
            // ->andWhere(['taken' => Properties::STATUS_DELETED])
            ->orderBy([
              'featured' => SORT_DESC,
              'created_at' => SORT_DESC,
            ]);
        }

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 12,
            ],
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
            'price' => $this->price,
            'featured' => $this->featured,
            'area' => $this->area,
            'rooms' => $this->rooms,
            'toilets' => $this->toilets,
            'garage' => $this->garage,
            'long' => $this->long,
            'lat' => $this->lat,
            'visits' => $this->visits,
            'taken' => $this->taken,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        if ($this->zone != 0)
          $query->andFilterWhere(['zone' => $this->zone]);

        if ($this->contract_id != 0)
          $query->andFilterWhere(['contract_id' => $this->contract_id]);

        if ($this->type_id != 0)
          $query->andFilterWhere(['type_id' => $this->type_id]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
