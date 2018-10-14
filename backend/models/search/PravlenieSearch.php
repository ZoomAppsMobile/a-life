<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Pravlenie;

class PravlenieSearch extends Pravlenie
{
    public function rules()
    {
        return [
            [['id', 'sort', 'status'], 'integer'],
            [['name', 'name_kz', 'name_en', 'position', 'position_en', 'position_kz', 'education', 'education_en', 'education_kz', 'job', 'job_en', 'job_kz', 'img'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Pravlenie::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'sort' => $this->sort,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'name_kz', $this->name_kz])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'position_en', $this->position_en])
            ->andFilterWhere(['like', 'position_kz', $this->position_kz])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'education_en', $this->education_en])
            ->andFilterWhere(['like', 'education_kz', $this->education_kz])
            ->andFilterWhere(['like', 'job', $this->job])
            ->andFilterWhere(['like', 'job_en', $this->job_en])
            ->andFilterWhere(['like', 'job_kz', $this->job_kz])
            ->andFilterWhere(['like', 'img', $this->img]);

        $query->orderBy('sort ASC');

        return $dataProvider;
    }
}
