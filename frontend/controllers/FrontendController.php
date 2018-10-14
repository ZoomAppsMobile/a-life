<?php
/**
 * Created by PhpStorm.
 * User: Yuriy
 * Date: 22.07.2018
 * Time: 2:02
 */

namespace frontend\controllers;

use yii\web\Controller;

class FrontendController extends  Controller
{
//    protected function setMeta($title = null, $keywords = null, $description = null){
//        $this->view->title = $title;
//        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
//        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
//    }

    public function beforeAction($action){
        if(\Yii::$app->session->get('lang')==''){
            \Yii::$app->language = 'ru';
        } else if(\Yii::$app->session->get('lang')=='_en'){
            \Yii::$app->language = 'en';
        } else if(\Yii::$app->session->get('lang')=='_kz'){
            \Yii::$app->language = 'kz';
        }

        return parent::beforeAction($action);
    }

    protected function setMeta($model){

        $this->view->title = $model['title'.\Yii::$app->session->get('lang')];
//        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$model->keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => $model['description'.\Yii::$app->session->get('lang')]]);
    }

    public static function cutStr($str, $length=50, $postfix='...')
    {
        if ( strlen($str) <= $length)
            return $str;

        $temp = substr($str, 0, $length);
        return substr($temp, 0, strrpos($temp, ' ') ) . $postfix;
    }
}