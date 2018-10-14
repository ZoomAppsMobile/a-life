<?php

namespace common\models;

use backend\models\Vacancy;
use Yii;

/**
 * This is the model class for table "are_distinguished".
 *
 * @property integer $id
 * @property string $fio
 * @property string $date_of_birth
 * @property string $city
 * @property string $phone
 * @property string $email
 * @property string $doc
 * @property integer $opit_1
 * @property integer $opit_2
 */
class AreDistinguished extends \common\models\CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'are_distinguished';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'date_of_birth', 'city', 'phone', 'email', 'doc', 'opit_1', 'opit_2'], 'required'],
            [['opit_1', 'opit_2', 'vacancy_id'], 'integer'],
            [['fio', 'date_of_birth', 'city', 'phone', 'email', 'doc'], 'string', 'max' => 255],
            [['doc'], 'file', 'extensions' => 'pdf, doc, docs, txt',
                'skipOnEmpty' => false],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Фамилия имя отчество',
            'date_of_birth' => 'Дата рождения',
            'city' => 'Город',
            'phone' => 'Телефон',
            'email' => 'Email',
            'doc' => 'Документ',
            'opit_1' => 'Опыт 1',
            'opit_2' => 'Опыт 2',
            'vacancy_id' => 'Вакансия'
        ];
    }

    public function getVacancy()
    {
        return $this->hasOne(Vacancy::className(), ['id' => 'vacancy_id']);
    }
}
