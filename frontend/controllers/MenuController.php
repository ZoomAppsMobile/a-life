<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 05.07.2018
 * Time: 15:16
 */

namespace frontend\controllers;

use backend\models\Document;
use backend\models\Statement;
use backend\models\Term;
use common\models\Menu;
use common\models\Metatags;
use common\models\PartnersAndCustomers;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\HttpException;

class MenuController extends FrontendController
{
    //////////////////Top menu

    /// О компании
    public function actionAboutTheCompany(){
        $model = Menu::findOne(['url' => 'about-company']);
        $meta = Menu::findOne(['url' => 'about-company']);

        $this->setMeta($meta);

        return $this->render('about-the-company', compact('model'));
    }

    public function actionAboutTheCompanyChild($url){
        if($url=="documents-and-publications")
            $model = Document::find()->all();
        elseif($url=="partners-and-customers")
            $model = PartnersAndCustomers::find()->all();
        else
            throw new HttpException(404 ,'Not found');
        $array = Metatags::find()->where('url = "'.$url.'"')->one();
        $this->setMeta($array);

        return $this->render("about-the-company/$url", compact('model'));
    }

    public function actionAboutTheCompanyChildChild($url, $url1){
        if($url=='documents-and-publications') {
            $url_document = explode(', ', Document::URL_DOCUMENT);
            $empty = 0;

            foreach($url_document as $k => $v){
                if($v==$url1){
                    $id = $k;
                    $empty = 1;
                    break;
                }

            }

            if(!$empty)
                throw new HttpException(404 ,'Not found');

            $model = Document::find()->where('category = "'.$id.'"')->orderBy('year DESC')->all();
            $array = Metatags::find()->where('url = "'.$url1.'"')->one();
            $this->setMeta($array);
        }
        elseif($url=='partners-and-customers'){
            $model = PartnersAndCustomers::find()->where("url = '$url1'")->one();
            $this->setMeta($model);

            $url1 = "partners-and-customers-one";
        }
        else
            throw new HttpException(404 ,'Not found');

        return $this->render("about-the-company/$url1", compact('model'));
    }

    ///Частным клиентам
    public function actionPrivateClients(){
        $model = Menu::findOne(['url' => 'private-clients']);

        return $this->render('private-clients', compact('model'));
    }

    ///Тех. поддержка
    public function actionClientSupport(){
        $model = Menu::findOne(['url' => 'clientsupport']);

        $meta = Metatags::find()->where('url = "clientsupport"')->one();
        $this->setMeta($meta);

        return $this->render('client-support', compact('model'));
    }

    public function actionClientSupportChild($url){
        if($url=="statement")
            $model = Statement::find()->with('docs')->all();

        $meta = Metatags::find()->where('url = "'.$url.'"')->one();
        $this->setMeta($meta);

        return $this->render("client-support/$url", compact('model'));
    }

    ///Бизнесу
    public function actionBusiness(){
        $model = Menu::findOne(['url' => 'business']);

        return $this->render('business', compact('model'));
    }

    ///Онлайн оплата
    public function actionOnlinePayment(){
        $model = Menu::findOne(['url' => 'online-payment']);

        $model = Metatags::find()->where('url = "online-payment"')->one();
        $this->setMeta($model);

        return $this->render('online-payment', compact('model'));
    }

    //////////////////Footer

    public function actionMediaInformation(){
        $model = Menu::findOne(['url' => 'media-information']);

        return $this->render('footer/media-information', compact('model'));
    }

    public function actionCareers(){//Готово
        $model = Menu::findOne(['url' => 'careers']);

        return $this->render('footer/careers', compact('model'));
    }

    public function actionQuestionsAndAnswers(){
        $model = Menu::findOne(['url' => 'questions-and-answers']);

        return $this->render('footer/questions-and-answers', compact('model'));
    }

    public function actionCompanyDetails(){
        $model = Menu::findOne(['url' => 'company-details']);

        return $this->render('footer/company-details', compact('model'));
    }

    public function actionFinancialIndicators(){
        $model = Menu::findOne(['url' => 'financial-indicators']);

        return $this->render('footer/financial-indicators', compact('model'));
    }

    public function actionOfferBook(){
        $model = Menu::findOne(['url' => 'offer-book']);

        return $this->render('footer/offer-book', compact('model'));
    }

    public function actionSpecialOffers(){
        $model = Menu::findOne(['url' => 'special-offers']);

        return $this->render('footer/special-offers', compact('model'));
    }
}