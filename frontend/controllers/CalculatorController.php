<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 11.07.2018
 * Time: 17:06
 */

namespace frontend\controllers;

use common\models\Countries;
use common\models\Step2kontDannieStr;
use common\models\Step2kontDannieZas;
use common\models\Step2polis;
use common\models\Step2strahovatel;
use common\models\Step2zastrahovanniy;
use frontend\models\Bolashak;
use frontend\models\Kazina;
use frontend\models\Mst;
use frontend\models\Osrns;
use frontend\models\Step2Form;
use yii\helpers\VarDumper;
use yii\web\Controller;
use Yii;

class CalculatorController extends FrontendController
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionOnline(){
        return $this->render('online');
    }

    public function actionChild($url, $error = ''){

        return $this->render($url, ['error' => $error]);
    }

    public function actionBolashakResponse()
    {
        $session = Yii::$app->session;

        if($session->get('bolashak'))
            $model = Bolashak::findOne($session->get('bolashak'));
        else
            $model = new Bolashak();

        $model->attributes = $_GET['Bolashak'];

        if(isset($_GET['Bolashak']) && $model->validate())
        {
            $model->clnYears = strtotime($model->clnYears);
            $model->data_rascheta = strtotime($model->data_rascheta);
            $model->data_rozhdenia = strtotime($model->data_rozhdenia);

            if($array = \Yii::$app->request->get()) {

                $oClient = new \SoapClient(
                    'http://app.asia-life.kz:8081/ws/asialife.wsdl',
                    [
                        'login' => 'asialife_site',
                        'password' => '1q3wr2',
                    ]
                );

                $oClient->__setLocation('http://app.asia-life.kz:8081/ws/asialife.wsdl');

                $aResult = $oClient->authorizationWS(
                    [
                        'login' => 'asialife_site',
                        'password' => '1q3wr2',
                    ]
                );

                $rez = (array)$aResult;

                $periodichnost = [1 => 'ежегодно', 2 => 'единовременно', 3 => 'раз в пол года', 4 => 'ежеквартально', 5 => 'ежемесячно'];
                $sex = [1 => 'м', 2 => 'ж'];

                if($array['Bolashak']['ADB']==0)
                    $model['ADB'] = $array['Bolashak']['strSum'];

                if($array['Bolashak']['TT']==0)
                    $model['TT'] = $array['Bolashak']['strSum'];

                if($array['Bolashak']['TD']==0)
                    $model['TD'] = $array['Bolashak']['strSum'];

                if($array['Bolashak']['HD']==0)
                    $model['HD'] = $array['Bolashak']['strSum'];

                if($array['Bolashak']['ATPD']==0)
                    $model['ATPD'] = $array['Bolashak']['strSum'];

                if($array['Bolashak']['CI']==0)
                    $model['CI'] = $array['Bolashak']['strSum'];

                if($array['Bolashak']['TTV']==0)
                    $model['TTV'] = $array['Bolashak']['strSum'];

                if($array['Bolashak']['DB']==0)
                    $model['DB'] = $array['Bolashak']['strSum'];

                if($array['Bolashak']['os_ot_uplaty']==0)
                    $model['os_ot_uplaty'] = $array['Bolashak']['strSum'];


                $aResult = $oClient->bolashak(
                    [
                        'sessionId' => $rez['sessionId'],
                        'periodichnost' => $periodichnost[$model['periodichnost']],
                        'sex' => $sex[$model['gender_str']],
                        'clnYears' => $this->calculate_age($model['clnYears']),
                        'srokYears' => $model['srokYears'],
                        'strSum' => $model['strSum'],
                        'DB' => $model['DB'],
                        'ADB' => $model['ADB'],
                        'ATPD' => $model['ATPD'],
                        'TT' => $model['TT'],
                        'CI' => $model['CI'],
                        'TD' => $model['TD'],
                        'HD' => $model['HD'],
                        'TTV' => $model['TTV'],
                    ]
                );
            }

            $aResult_model = (array)$aResult;

            $model->strVznos = $aResult_model['number'];
            $model->OutADB = $aResult_model['OutADB'];
            $model->OutATPD = $aResult_model['OutATPD'];
            $model->OutCI = $aResult_model['OutCI'];
            $model->OutDB = $aResult_model['OutDB'];
            $model->OutHD = $aResult_model['OutHD'];
            $model->OutTD = $aResult_model['OutTD'];
            $model->OutTPD = $aResult_model['OutTPD'];
            $model->OutTT = $aResult_model['OutTT'];
            $model->OutTTV = $aResult_model['OutTTV'];

            $model->save();

            $session->set('bolashak', $model->id);

            return json_encode($aResult);

            die;
        }else{
            $errors = [];
            foreach ($model->errors as $v){
                $errors[] = $v[0].'<br />';
            }

            return json_encode($errors);

            die;
        }

        die;
    }

    public function actionKazinaResponse()
    {
        $session = Yii::$app->session;

        if($session->get('kazina'))
            $model = Kazina::findOne($session->get('kazina'));
        else
            $model = new Kazina();

        $model->attributes = $_GET['Kazina'];

        if(isset($_GET['Kazina']) && $model->validate())
        {
            $model->clnYears = strtotime($model->clnYears);
            $model->data_rascheta = strtotime($model->data_rascheta);

            if($array = \Yii::$app->request->get()) {
                $oClient = new \SoapClient(
                    'http://app.asia-life.kz:8081/ws/asialife.wsdl',
                    [
                        'login' => 'asialife_site',
                        'password' => '1q3wr2',
                    ]
                );

                $oClient->__setLocation('http://app.asia-life.kz:8081/ws/asialife.wsdl');

                $aResult = $oClient->authorizationWS(
                    [
                        'login' => 'asialife_site',
                        'password' => '1q3wr2',
                    ]
                );

                $rez = (array)$aResult;

                $periodichnost = [1 => 'ежегодно', 2 => 'единовременно', 3 => 'раз в пол года', 4 => 'ежеквартально', 5 => 'ежемесячно'];
                $sex = [1 => 'м', 2 => 'ж'];

                if($array['Kazina']['ADB']==0)
                    $model['ADB'] = $array['Kazina']['strSum'];

                if($array['Kazina']['ATPD']==0)
                    $model['ATPD'] = $array['Kazina']['strSum'];

                if($array['Kazina']['TT']==0)
                    $model['TT'] = $array['Kazina']['strSum'];

                if($array['Kazina']['CI']==0)
                    $model['CI'] = $array['Kazina']['strSum'];

                if($array['Kazina']['TD']==0)
                    $model['TD'] = $array['Kazina']['strSum'];

                if($array['Kazina']['HD']==0)
                    $model['HD'] = $array['Kazina']['strSum'];

                if($array['Kazina']['os_ot_uplaty']==0)
                    $model['os_ot_uplaty'] = $array['Kazina']['strSum'];

                $aResult = $oClient->kazina(
                    [
                        'sessionId' => $rez['sessionId'],
                        'periodichnost' => $periodichnost[$model['periodichnost']],
                        'sex' => $sex[$model['sex']],
                        'clnYears' => $this->calculate_age($model['clnYears']),
                        'srokYears' => $model['srokYears'],
                        'strSum' => $model['strSum'],
                        'ADB' => $model['ADB'],
                        'ATPD' => $model['ATPD'],
                        'TT' => $model['TT'],
                        'CI' => $model['CI'],
                        'TD' => $model['TD'],
                        'HD' => $model['HD'],
                    ]
                );
            }

            $aResult_model = (array)$aResult;

            $model->OutADB = $aResult_model['OutADB'];
            $model->OutATPD = $aResult_model['OutATPD'];
            $model->OutCI = $aResult_model['OutCI'];
            $model->OutHD = $aResult_model['OutHD'];
            $model->OutTD = $aResult_model['OutTD'];
            $model->OutTPD = $aResult_model['OutTPD'];
            $model->OutTT = $aResult_model['OutTT'];
            $model->strVz = $aResult_model['number'];

            $model->save();

            $session->set('kazina', $model->id);

            return json_encode($aResult);

            die;
        }else{
            $errors = [];
            foreach ($model->errors as $v){
                $errors[] = $v[0].'<br />';
            }

            return json_encode($errors);

            die;
        }
    }

    public function actionOsrnsResponse()
    {
        $session = Yii::$app->session;

        if($session->get('osrns'))
            $model = Osrns::findOne($session->get('osrns'));
        else
            $model = new Osrns();

        $model->attributes = $_GET['Osrns'];

        if(isset($_GET['Osrns']) && $model->validate())
        {
            $model->d_rascheta = strtotime($model->d_rascheta);

            if($array = \Yii::$app->request->get()) {

                $oClient = new \SoapClient(
                    'http://app.asia-life.kz:8081/ws/asialife.wsdl',
                    [
                        'login' => 'asialife_site',
                        'password' => '1q3wr2',
                    ]
                );

                $oClient->__setLocation('http://app.asia-life.kz:8081/ws/asialife.wsdl');

                $aResult = $oClient->authorizationWS(
                    [
                        'login' => 'asialife_site',
                        'password' => '1q3wr2',
                    ]
                );

                $rez = (array)$aResult;

                $aResult = $oClient->osrns(
                    [
                        'sessionId' => $rez['sessionId'],
                        'oked' => $model['oked'],
                        'yearFond' => $model['yearFond'],
                        'col_sotr' => $model['col_sotr'],
                    ]
                );
            }

            $aResult_model = (array)$aResult;

            $model->premKz = $aResult_model['premKz'];
            $model->sumStrahKz = $aResult_model['sumStrahKz'];

            $model->save();

            $session->set('osrns', $model->id);

            return json_encode($aResult);

            die;
        }else{
            $errors = [];
            foreach ($model->errors as $v){
                $errors[] = $v[0].'<br />';
            }

            return json_encode($errors);

            die;
        }

        die;
    }

    public function actionMstResponse()
    {
        $session = Yii::$app->session;

        if($session->get('mst'))
            $model = Mst::findOne($session->get('mst'));
        else
            $model = new Mst();

        $model->attributes = $_GET['Mst'];

        if(isset($_GET['Mst']) && $model->validate())
        {
            $model->beginDate = strtotime($model->beginDate);
            $model->endDate = strtotime($model->endDate);
            $model->birthDate = strtotime($model->birthDate);

            if($array = \Yii::$app->request->get()) {

                $oClient = new \SoapClient(
                    'http://app.asia-life.kz:8081/ws/asialife.wsdl',
                    [
                        'login' => 'asialife_site',
                        'password' => '1q3wr2',
                    ]
                );

                $oClient->__setLocation('http://app.asia-life.kz:8081/ws/asialife.wsdl');

                $aResult = $oClient->authorizationWS(
                    [
                        'login' => 'asialife_site',
                        'password' => '1q3wr2',
                    ]
                );

                $rez = (array)$aResult;

                $beginDate = strtotime($array['Mst']['beginDate']);
                $beginDate = date('d.m.Y', $beginDate);

                $endDate = strtotime($array['Mst']['endDate']);
                $endDate = date('d.m.Y', $endDate);

                $birthDate = strtotime($array['Mst']['birthDate']);
                $birthDate = date('d.m.Y', $birthDate);

                if($array['insuranceProgramm']==1){
                    $array['rprogSrok'] = '';
                    $array['rprogMaxDays'] = '';
                }

                $aResult = $oClient->mst(
                    [
                        'sessionId' => $rez['sessionId'],
                        'country1' => $model['country1'],
                        'country2' => $model['country2'],
                        'country3' => $model['country3'],
                        'sumStrah' => $model['sumStrah'],
                        'insuranceProgramm' => $model['insuranceProgramm'],
                        'beginDate' => $beginDate,
                        'endDate' => $endDate,
                        'birthDate' => $birthDate,
                        'rprogSrok' => $model['rprogSrok'],
                        'rprogMaxDays' => $model['rprogMaxDays'],
                        'email' => $model['email'],
                    ]
                );
            }

            $aResult_model = (array)$aResult;

            $model->kurs = $aResult_model['kurs'];
            $model->premEur = $aResult_model['premEur'];
            $model->premKz = $aResult_model['premKz'];
            $model->sumStrahKz = $aResult_model['sumStrahKz'];

            $model->save();

            $session->set('mst', $model->id);

            return json_encode($aResult);

            die;
        }else{
            $errors = [];
            foreach ($model->errors as $v){
                $errors[] = $v[0].'<br />';
            }

            return json_encode($errors);

            die;
        }

        die;
    }

    public function actionStep2($url)
    {
        $session = Yii::$app->session;

        $step2kont_dannie_str = new Step2kontDannieStr;
        $step2kont_dannie_zas = new Step2kontDannieZas;
        $model = new Step2polis;
        $step2strahovatel = new Step2strahovatel;
        $step2zastrahovanniy = new Step2zastrahovanniy;

        if($session->get($url)&&!$_POST){
            $model_old_step = 'frontend\\models\\' . ucfirst($url);
            $model_old_step = $model_old_step::findOne($session->get($url));

//            $model = new Step2Form;

//            if (isset($_GET['Step2Form']) && $step2->validate()) {
//                echo 1;
//                die;
//            }

            $model->attributes = $model_old_step->attributes;

            $country = Countries::find()->orderBy('name')->all();

            return $this->render('step2_new', compact('model', 'country', 'model_old_step',
                'step2kont_dannie_str', 'step2kont_dannie_zas', 'step2strahovatel', 'step2zastrahovanniy'));
        }elseif($_POST){
            $step2kont_dannie_str->load(Yii::$app->request->post());
            $step2kont_dannie_zas->load(Yii::$app->request->post());
            $model->load(Yii::$app->request->post());
            $step2strahovatel->load(Yii::$app->request->post());
            $step2zastrahovanniy->load(Yii::$app->request->post());

            if($model->validate() && $step2strahovatel->validate() && $step2kont_dannie_str->validate()
                && $step2zastrahovanniy->validate() && $step2kont_dannie_zas->validate()){

                $step2kont_dannie_zas->data_vidachi = strtotime($step2kont_dannie_zas->data_vidachi);
                $model->beginDate = strtotime($model->beginDate);
                $model->endDate = strtotime($model->endDate);

                $model->mst_id = $session->get('mst');
                $model->save();

                $step2strahovatel->mst_id = $session->get('mst');
                $step2strahovatel->save();

                $step2kont_dannie_str->mst_id = $session->get('mst');
                $step2kont_dannie_str->save();

                $step2zastrahovanniy->mst_id = $session->get('mst');
                $step2zastrahovanniy->save();

                $step2kont_dannie_zas->mst_id = $session->get('mst');
                $step2kont_dannie_zas->save();

                return $this->redirect('step3');

            }else{
                if($session->get($url)){
                    $model_old_step = 'frontend\\models\\' . ucfirst($url);
                    $model_old_step = $model_old_step::findOne($session->get($url));

                    $model->attributes = $model_old_step->attributes;

                    $country = Countries::find()->orderBy('name')->all();

                    return $this->render('step2_new', compact('model', 'country', 'model_old_step',
                        'step2kont_dannie_str', 'step2kont_dannie_zas', 'step2strahovatel', 'step2zastrahovanniy'));
                }else{
                    return $this->actionChild($url, $error = 'Рассчитайте полис!');
                }
            }

        }else{
            return $this->actionChild($url, $error = 'Рассчитайте полис!');
        }
    }

    public function actionStep3()
    {
//        $session = Yii::$app->session;
//
//        $model =  'frontend\\models\\'.ucfirst($url);
//        $model = $model::findOne($session->get($url));

        $session = Yii::$app->session;

        $mst = Mst::findOne($session->get('mst'));
        $step2kont_dannie_str = Step2kontDannieStr::find()->where(['mst_id' => $session->get('mst')])->one();
        $step2kont_dannie_zas = Step2kontDannieZas::find()->where(['mst_id' => $session->get('mst')])->one();
        $model = Step2polis::find()->where(['mst_id' => $session->get('mst')])->one();
        $step2strahovatel = Step2strahovatel::find()->where(['mst_id' => $session->get('mst')])->one();
        $step2zastrahovanniy = Step2zastrahovanniy::find()->where(['mst_id' => $session->get('mst')])->one();
        $country = Countries::find()->where(['country_id' => $model->country1])->one();

        return $this->render('step3', compact('model', 'country', 'step2kont_dannie_str',
            'step2kont_dannie_zas', 'step2strahovatel', 'step2zastrahovanniy', 'mst'));
    }

    public function actionCountryType()
    {
        $id = $_GET['id'];

        $model = Countries::find()->where("country_id = $id")->one();

        echo $model->type;

        die;
    }

    function calculate_age($birthday) {
        $birthday_timestamp = strtotime($birthday);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
            $age--;
        }
        return $age;
    }
}