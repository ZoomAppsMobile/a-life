<?php

namespace frontend\models;

use Yii;

class Bolashak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bolashak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone_number', 'email', 'clnYears', 'data_rascheta', 'srokYears', 'periodichnost', 'strSum', 'ADB', 'TT', 'TD', 'HD', 'ATPD', 'CI', 'os_ot_uplaty', 'TTV', 'DB', 'data_rozhdenia', 'gender', 'gender_str'], 'required'],
            [['OutADB', 'OutTT', 'OutTD', 'OutHD', 'OutATPD', 'OutCI', 'OutTPD', 'OutTTV', 'OutDB'], 'integer'],
            [['name', 'phone_number', 'email'], 'string', 'max' => 100],
            ['strVznos', 'safe'],
            ['email', 'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ф.И.О.',
            'phone_number' => 'Телефон',
            'email' => 'E-mail',
            'clnYears' => 'Дата рождения',
            'data_rascheta' => 'Дата расчетa',
            'srokYears' => 'Срок страхования',
            'periodichnost' => 'Периодичность взносов',
            'strSum' => 'Страховая сумма',
            'strVznos' => 'Страховой взнос',
            'ADB' => 'Срок страхования',
            'TT' => 'Телесная травма в результате',
            'TD' => 'Установление временой нетрудоспособности',
            'HD' => 'Госпитализация в результате НС',
            'ATPD' => 'Инвалидность в результате НС',
            'CI' => 'Критическое заболевание',
            'os_ot_uplaty' => 'Освобождение от уплаты взносов',
            'TTV' => 'Дополнительные покрытия Выгодоприобретателя',
            'DB' => 'Освобождение от уплаты взносов в случае смерти Застрахованного',
            'data_rozhdenia' => 'Дата рождения',
            'gender' => 'Пол застрахованного',
            'gender_str' => 'Пол страхователя',
            'OutADB' => 'Страховой взнос смерть в результате НС',
            'OutTT' => 'Страховой взнос телесная травма в результате',
            'OutTD' => 'Страховой взнос установление временой нетрудоспособности',
            'OutHD' => 'Страховой взнос госпитализация в результате НС',
            'OutATPD' => 'Страховой взнос инвалидность в результате НС',
            'OutCI' => 'Страховой взнос критическое заболевание',
            'OutTPD' => 'Страховой взнос освобождение от уплаты взносов',
            'OutTTV' => 'Страховой взнос дополнительные покрытия Выгодоприобретателя',
            'OutDB' => 'Страховой взнос освобождение от уплаты взносов в случае смерти Застрахованного',
        ];
    }
}
