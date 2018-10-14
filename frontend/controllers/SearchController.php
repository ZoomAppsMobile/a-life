<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 28.08.2018
 * Time: 9:34
 */

namespace frontend\controllers;


use app\models\ChildsInsuranceCoverage;
use backend\models\Blog;
use backend\models\Faq;
use backend\models\News;
use backend\models\Term;
use backend\models\Vacancy;
use common\models\AdditionalInsuranceCoverage;
use common\models\AdditionalProtectionInsurer;
use common\models\Advantages;
use common\models\BasicInsuranceCoverage;
use common\models\Menu;
use common\models\Metatags;
use common\models\NewVacancy;
use common\models\Pravlenie;

class SearchController extends FrontendController
{
    public function actionIndex()
    {
        $meta = Metatags::find()->where('url = "search"')->one();
        $this->setMeta($meta);

        $model_blog = Blog::find()->where('content'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();
        $model_news = News::find()->where('content'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();
        $AdditionalInsuranceCoverage = AdditionalInsuranceCoverage::find()->where('title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR text'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();
        $AdditionalProtectionInsurer = AdditionalProtectionInsurer::find()->where('title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR text'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();
        $BasicInsuranceCoverage = BasicInsuranceCoverage::find()->where('title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR text'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();
        $ChildsInsuranceCoverage = ChildsInsuranceCoverage::find()->where('title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR text'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();
        $Faq = Faq::find()->where('title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR answer'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();
        $Menu = Menu::find()->where('name'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR text'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();
        $NewVacancy= Vacancy::find()->where('title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR content'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();
        $Pravlenie= Pravlenie::find()->where('name'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR position'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" 
                OR education'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR job'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%"')->all();
        $Term= Term::find()->where('title'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" OR description'.\Yii::$app->session->get('lang').' LIKE "%'.$_GET['text'].'%" ')->all();


        return $this->render('index', compact('model_blog', 'model_news', 'AdditionalInsuranceCoverage', 'AdditionalProtectionInsurer',
            'BasicInsuranceCoverage', 'ChildsInsuranceCoverage', 'Faq', 'Menu', 'NewVacancy', 'Pravlenie', 'Term'));
    }
}