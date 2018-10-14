<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_kz
 * @property string $title_en
 * @property string $answer
 * @property string $answer_kz
 * @property string $answer_en
 * @property integer $category
 * @property integer $order
 * @property string $status
 *
 * @property Faqcategory $category0
 */
class Faq extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'answer', 'answer_kz', 'answer_en',  'order', 'status'], 'required'],
            [['answer', 'answer_kz', 'answer_en', 'status'], 'string'],
            [['category', 'order'], 'integer'],
            [['title', 'title_kz', 'title_en'], 'string', 'max' => 512],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => Faqcategory::className(), 'targetAttribute' => ['category' => 'id']],
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
            'answer' => 'Ответы',
            'answer_kz' => 'Ответы (Kz)',
            'answer_en' => 'Ответы (En)',
            'category' => 'Категории',
            'order' => 'Порядок',
            'status' => 'Статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(Faqcategory::className(), ['id' => 'category']);
    }
}
