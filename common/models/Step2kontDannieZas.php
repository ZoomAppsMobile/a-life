<?php
namespace common\models;

use Yii;

class Step2kontDannieZas extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'step2kont_dannie_zas';
    }

    public function rules()
    {
        return [
            [['region', 'address', 'phone', 'email', 'vid_documenta', 'seria', 'nomer', 'data_vidachi', 'kem_vidan'], 'required'],
            [['mst_id'], 'integer'],
            [['address'], 'string'],
            [['region', 'email', 'vid_documenta'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['seria', 'nomer'], 'string', 'max' => 30],
            [['kem_vidan'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_id' => 'Mst ID',
            'region' => 'Регион',
            'address' => 'Адрес местожительства',
            'phone' => 'Контактный телефон',
            'email' => 'E-mail',
            'vid_documenta' => 'Вид документа',
            'seria' => 'Серия паспорта',
            'nomer' => 'Номер паспорта',
            'data_vidachi' => 'Дата выдачи',
            'kem_vidan' => 'Кем выдано',
        ];
    }
}
