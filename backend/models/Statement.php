<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "statement".
 *
 * @property integer $id
 * @property string $title
 * @property string $title_kz
 * @property string $title_en
 * @property string $status
 * @property integer $order
 */
class Statement extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'statement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'title_kz', 'title_en', 'status', 'order'], 'required'],
            [['status'], 'string'],
            [['order'], 'integer'],
            [['title', 'title_kz', 'title_en'], 'string', 'max' => 512],
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
            'title_kz' => 'Заголовок Kz',
            'title_en' => 'Заголовок En',
            'status' => 'Статус',
            'order' => 'Порядок',
        ];
    }

    public function getDocs(){
        return $this->hasMany(Statementdoc::className(), ['state_id' => 'id']);
    }
}
