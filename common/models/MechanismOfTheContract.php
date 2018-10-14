<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mechanism_of_the_contract".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $img
 */
class MechanismOfTheContract extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mechanism_of_the_contract';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'img'], 'required'],
            [['text'], 'string'],
            [['title', 'img'], 'string', 'max' => 255],
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
