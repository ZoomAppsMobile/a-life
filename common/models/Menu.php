<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string $name
 * @property string $text
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $url
 */
class Menu extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'name_en', 'name_kz'], 'required'],
            [['text', 'description', 'dop_text'], 'string'],
            [['sort_top', 'sort_footer', 'parent_id', 'footer', 'top', 'status'], 'integer'],
            [['name', 'name_en', 'name_kz', 'title', 'keywords', 'url', 'title_kz', 'title_en', 'description_en', 'description_kz', 'text_kz', 'text_en', 'dop_text_en', 'dop_text_kz'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'name_en' => 'Название',
            'name_kz' => 'Название',
            'text' => 'Текст',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'keywords' => 'Ключевые слова',
            'url' => 'Url',
            'status' => 'Статус',
            'dop_text' => 'Дополнительный текст',
            'title_kz' => 'Заголовок',
            'title_en' => 'Заголовок',
            'description_en' => 'Описание',
            'description_kz' => 'Описание',
            'text_kz' => 'Текст',
            'text_en' => 'Текст',
            'dop_text_en' => 'Дополнительный текст',
            'dop_text_kz' => 'Дополнительный текст',
        ];
    }

//    public function beforeSave($insert){
//        if($this->isNewRecord) {
//            $model = Menu::find()->orderBy('sort DESC')->one();
//            if ($this->id != $model->id) {
//                $this->sort = $model->sort + 1;
//            }
//        }
//        return parent::beforeSave($insert);
//    }
}
