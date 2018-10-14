<?php
namespace common\models;

use Yii;

class Pravlenie extends \common\models\CommonModel
{
    public $path = 'images/pravlenie/';

    public static function tableName()
    {
        return 'pravlenie';
    }

    public function rules()
    {
        return [
            [['name', 'position', 'education', 'job', 'img', 'sort', 'status'], 'required'],
            [['education', 'education_en', 'education_kz', 'job', 'job_en', 'job_kz'], 'string'],
            [['sort', 'status'], 'integer'],
            [['name', 'name_kz', 'name_en', 'position', 'position_en', 'position_kz', 'img'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'name_kz' => 'Name Kz',
            'name_en' => 'Name En',
            'position' => 'Position',
            'position_en' => 'Position En',
            'position_kz' => 'Position Kz',
            'education' => 'Education',
            'education_en' => 'Education En',
            'education_kz' => 'Education Kz',
            'job' => 'Job',
            'job_en' => 'Job En',
            'job_kz' => 'Job Kz',
            'img' => 'Картинка',
            'sort' => 'Сортировка',
            'status' => 'Статус',
        ];
    }

    public function upload()
    {
        $time = time();
        $this->img->saveAs($this->path. $time . $this->img->baseName . '.' . $this->img->extension);
        return $time . $this->img->baseName . '.' . $this->img->extension;
    }

    public function beforeSave($insert){
        if($this->isNewRecord) {
            $model = Pravlenie::find()->orderBy('sort DESC')->one();
            if (!$model || $this->id != $model->id) {
                $this->sort = $model->sort + 1;
            }
        }
        return parent::beforeSave($insert);
    }
}
