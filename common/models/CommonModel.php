<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 23.08.2018
 * Time: 9:23
 */

namespace common\models;


class CommonModel extends \yii\db\ActiveRecord
{
    public function setLang($name){
        $name = $name.\Yii::$app->session->get('lang');
        return $this->$name;
    }
}