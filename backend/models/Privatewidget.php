<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "privatewidget".
 *
 * @property integer $id
 * @property integer $wid
 * @property integer $pid
 * @property string $title
 * @property string $status
 * @property integer $order
 */
class Privatewidget extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'privatewidget';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wid', 'status', 'order'], 'required'],
            [['wid', 'pid', 'order'], 'integer'],
            [['status'], 'string'],
            [['title'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wid' => 'Виджет',
            'pid' => 'Частным клиентам',
            'title' => 'Заголовок',
            'status' => 'Статус',
            'order' => 'Порядок',
        ];
    }
}
