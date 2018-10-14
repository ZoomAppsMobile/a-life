<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "advantages".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $img
 */
class Advantages extends \common\models\CommonModel
{
    public $files;
    public $path = 'images/advantages/';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advantages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'img'], 'required'],
            [['text', 'text_kz', 'text_en'], 'string'],
            [['title', 'img', 'title_kz', 'title_en'], 'string', 'max' => 255],
            ['files', 'each', 'rule' => ['image']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'text' => 'Текст',
            'img' => 'Картинка',
            'title_kz' => 'Название kz',
            'title_en' => 'Название en',
            'text_kz' => 'Текст kz',
            'text_en' => 'Текст en',
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
            $model = Advantages::find()->orderBy('sort DESC')->one();
            if (!$model || $this->id != $model->id) {
                $this->sort = $model->sort + 1;
            }
        }
        return parent::beforeSave($insert);
    }
}
