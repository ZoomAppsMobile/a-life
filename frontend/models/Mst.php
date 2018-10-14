<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mst".
 *
 * @property int $id
 * @property int $insuranceProgramm
 * @property int $rprogSrok
 * @property int $rprogMaxDays
 * @property int $country1
 * @property int $country2
 * @property int $country3
 * @property int $beginDate
 * @property int $endDate
 * @property int $birthDate
 * @property string $phone
 * @property int $email
 * @property int $sumStrah
 * @property int $premKz
 * @property int $kurs
 * @property int $sumStrahKz
 * @property int $premEur
 */
class Mst extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mst';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['insuranceProgramm', 'country1', 'country2', 'country3', 'beginDate', 'endDate', 'birthDate', 'phone', 'email', 'sumStrah'], 'required'],
            [['premKz', 'kurs', 'sumStrahKz', 'premEur'], 'safe'],
            [['rprogSrok', 'rprogMaxDays'], 'safe'],
            [['phone'], 'string', 'max' => 30],
            ['email', 'email'],
            [['country1', 'insuranceProgramm'], 'issetAttr'],
            ['insuranceProgramm', 'insuranceProgramm'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'insuranceProgramm' => 'Программа страхования',
            'rprogSrok' => 'Продолжительность страхования',
            'rprogMaxDays' => 'Макс. кол-во дней за границей',
            'country1' => 'Страна 1',
            'country2' => 'Страна 2',
            'country3' => 'Страна 3',
            'beginDate' => 'Начало действия',
            'endDate' => 'Окончание действия',
            'birthDate' => 'Дата рождения',
            'phone' => 'Контактный телефон',
            'email' => 'E-mail',
            'sumStrah' => 'Страховая сумма',
            'premKz' => 'Страховая премия, тенге',
            'kurs' => 'Курс евро на сегодня',
            'sumStrahKz' => 'Страховая сумма',
            'premEur' => 'Страховая премия, евро',
        ];
    }

    public function issetAttr($attribute,$params)
    {
        if(!$this->country1)
            $this->addError("country1","Необходимо указать страну.");

        if(!$this->insuranceProgramm)
            $this->addError("insuranceProgramm","Необходимо указать программу страхования.");
    }

    public function insuranceProgramm($attribute,$params)
    {
        if($this->insuranceProgramm==2){
            if(!$this->rprogSrok)
                $this->addError("rprogSrok","Необходимо указать продолжительность страхования.");

            if(!$this->rprogMaxDays)
                $this->addError("rprogMaxDays","Необходимо указать макс. кол-во дней за границей.");
        }
    }
}
