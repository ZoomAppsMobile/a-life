<?php
namespace frontend\controllers;
use yii\web\Controller;
use backend\models\Document;
class DocumentController extends FrontendController
{
	public function actionIndex()
    {
        $docs=Document::find()->where(['status'=>'1', 'category'=>'0'])->orderBy(['order' => SORT_DESC])->all();
        return $this->render('index',['docs'=>$docs]);
    }
    public function actionReestr()
    {
        $docs=Document::find()->where(['status'=>'1', 'category'=>'1'])->orderBy(['order' => SORT_DESC])->all();
        return $this->render('reestr',['docs'=>$docs]);
    }
    public function actionRule()
    {
        $docs=Document::find()->where(['status'=>'1', 'category'=>'1'])->orderBy(['order' => SORT_DESC])->all();
        return $this->render('rule',['docs'=>$docs]);
    }

}
?>