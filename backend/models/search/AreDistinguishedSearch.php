<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AreDistinguished;

/**
 * AreDistinguishedSearch represents the model behind the search form about `common\models\AreDistinguished`.
 */
class AreDistinguishedSearch extends AreDistinguished
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'opit_1', 'opit_2'], 'integer'],
            [['fio', 'date_of_birth', 'city', 'phone', 'email', 'doc'], 'safe'],
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
        $query = AreDistinguished::find();

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
            'opit_1' => $this->opit_1,
            'opit_2' => $this->opit_2,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'date_of_birth', $this->date_of_birth])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'doc', $this->doc]);

        return $dataProvider;
    }
}
