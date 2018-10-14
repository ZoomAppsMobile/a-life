<?php
namespace frontend\controllers;
use common\models\Metatags;
use yii\web\Controller;
use backend\models\News;

class NewsController extends FrontendController
{
	public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }
	public function actionIndex()
    {
        $meta = Metatags::find()->where('url = "news"')->one();
        $this->setMeta($meta);

    	$news=News::find()->where(['status'=>1])->orderBy(['dating' => SORT_DESC]);
    	if(isset($_POST['page'])){
            $post_page=$_POST['page'];
        } else{
            $post_page=1;
        }
      
        $post_per_page=4;
        
        if ($post_page * $post_per_page >= count($news->all())) {
            $last = true;
        } else {
            $last = false;
        }
        $allmodels = $news->offset(($post_page - 1) * $post_per_page)
            ->limit($post_per_page)
            ->all();
        return $this->render('index',['models'=>$allmodels, 'last'=>$last]);
    }

    public function actionPage()
    {
    	$news=News::find()->where(['status'=>1])->orderBy(['dating' => SORT_DESC]);
    	if(isset($_POST['page'])){
            $post_page=$_POST['page'];
        } else{
            $post_page=1;
        }
      
        $post_per_page=4;
        
        if ($post_page * $post_per_page >= count($news->all())) {
            $last = true;
        } else {
            $last = false;
        }
        $allmodels = $news->offset(($post_page - 1) * $post_per_page)
            ->limit($post_per_page)
            ->all();
        return $this->renderAjax('ajax',['models'=>$allmodels, 'last'=>$last, 'post_page' => $post_page]);
    }

    public function actionOnenews($url)
    {    
        $model = News::find()->where('url = "'.$url.'"')->where(['status'=>1])->one();
        $this->setMeta($model);
        $news=News::find()->where(['status'=>1])->orderBy(['dating'=>SORT_DESC])->limit(4)->all();

        return $this->render('news',['model'=>$model, 'news' => $news]);
    }

}
?>