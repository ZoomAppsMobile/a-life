<?php
namespace frontend\controllers;
use common\models\Metatags;
use yii\web\Controller;
use backend\models\Term;
class TermsController extends FrontendController
{
	public function actionIndex()
    {
        $meta = Metatags::find()->where('url = "terms"')->one();
        $this->setMeta($meta);

    	if(\Yii::$app->session->get('lang')==''){
    		$terms=Term::find()->where(['status'=>'1'])->orderBy(['title' => SORT_ASC])->all();
        } else if(\Yii::$app->session->get('lang')=='_en'){
        	$terms=Term::find()->where(['status'=>'1'])->orderBy(['title_en' => SORT_ASC])->all();
        } else if(\Yii::$app->session->get('lang')=='_kz'){
        	$terms=Term::find()->where(['status'=>'1'])->orderBy(['title_kz' => SORT_ASC])->all();
        }
        return $this->render('index',['terms'=>$terms]);
    }
}
?>