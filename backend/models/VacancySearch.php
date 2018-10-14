<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Vacancy;

/**
 * VacancySearch represents the model behind the search form about `backend\models\Vacancy`.
 */
class VacancySearch extends Vacancy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'salary'], 'integer'],
            [['title', 'title_kz', 'title_en', 'description', 'description_kz', 'description_en', 'image', 'main', 'content', 'content_kz', 'content_en', 'city', 'status'], 'safe'],
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
        $query = Vacancy::find();

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
            'salary' => $this->salary,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'title_kz', $this->title_kz])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'description_kz', $this->description_kz])
            ->andFilterWhere(['like', 'description_en', $this->description_en])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'main', $this->main])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'content_kz', $this->content_kz])
            ->andFilterWhere(['like', 'content_en', $this->content_en])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
