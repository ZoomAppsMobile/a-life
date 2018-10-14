<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
class LangController extends FrontendController
{
	public function actionIndex($url){

		if($url=='ru'){
			Yii::$app->session->set('lang','');
		}     
		else if($url=='en'){
			Yii::$app->session->set('lang','_en');
		}
		else if($url=='kz'){
			Yii::$app->session->set('lang','_kz');
		}
		else{
			throw new ForbiddenHttpException;   
		}
		$this->redirect($_SERVER['HTTP_REFERER']);                                                              
    }
}
?>