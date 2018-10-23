<?php
namespace common\models;

use Yii;

class Step2kontDannieStr extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'step2kont_dannie_str';
    }

    public function rules()
    {
        return [
            [['region', 'address', 'kod_sect_ec', 'phone', 'email', 'naim_banka', 'bik', 'rasch_kod'], 'required'],
            [['mst_id'], 'integer'],
            [['address'], 'string'],
            [['region', 'kod_sect_ec', 'email', 'naim_banka', 'rasch_kod'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['bik'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mst_id' => 'Mst ID',
            'region' => 'Регион',
            'address' => 'Адрес местожительства',
            'kod_sect_ec' => 'Код сект. эк.',
            'phone' => 'Контактный телефон',
            'email' => 'E-mail',
            'naim_banka' => 'Наименование банка',
            'bik' => 'БИК',
            'rasch_kod' => 'Расчетный счет',
        ];
    }
}
