<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "docs".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $file
 * @property int $sort
 */
class Docs extends \common\models\CommonModel
{
    public $files;
    public $path = 'images/docs/';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'docs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text', 'file', 'sort'], 'required'],
            [['text', 'text_kz', 'text_en'], 'string'],
            [['sort'], 'integer'],
            [['title', 'file', 'title_kz', 'text_en'], 'string', 'max' => 255],
            ['files', 'each', 'rule' => ['file']],
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
            'title_kz' => 'Название kz',
            'title_en' => 'Название en',
            'text' => 'Текст',
            'text_kz' => 'Текст kz',
            'text_en' => 'Текст en',
            'file' => 'Файл',
            'sort' => 'Сортировка',
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
            $model = Docs::find()->orderBy('sort DESC')->one();
            if (!$model || $this->id != $model->id) {
                $this->sort = $model->sort + 1;
            }
        }
        return parent::beforeSave($insert);
    }
}
