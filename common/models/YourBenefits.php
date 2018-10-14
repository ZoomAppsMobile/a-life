<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "your_benefits".
 *
 * @property integer $id
 * @property string $title
 * @property string $img
 */
class YourBenefits extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'your_benefits';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'img'], 'required'],
            [['title', 'img'], 'string', 'max' => 255],
            ['text', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'text' => 'Текст',
            'img' => 'Картинка',
        ];
    }
}
