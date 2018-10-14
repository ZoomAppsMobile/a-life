<?php

namespace backend\models;

use Yii;

class Faqcategory extends \common\models\CommonModel
{
    
    public static function tableName()
    {
        return 'faqcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'image', 'status'], 'required'],
            [['status'], 'string'],
            [['title', 'title_kz', 'title_en', 'image'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'title_kz' => 'Заголовок (Kz)',
            'title_en' => 'Заголовок (En)',
            'image' => 'Картинка',
            'status' => 'Статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaqs()
    {
        return $this->hasMany(Faq::className(), ['category' => 'id']);
    }
}
