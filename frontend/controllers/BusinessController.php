<?php
namespace frontend\controllers;
use common\models\Metatags;
use yii\web\Controller;
use backend\models\Blogcategory;
use backend\models\Blog;
use backend\models\Blogtag;
use backend\models\Privatewidget;
class BusinessController extends FrontendController
{
	public function actionIndex()
    {
    	$blogs=Blog::find()->where(['status'=>'1', 'category'=>4])->all();

    	$meta = Metatags::find()->where('url = "business"')->one();
        $this->setMeta($meta);

        return $this->render('index',['blogs'=>$blogs]);
    }
    public function actionDetail($url)
    {   
    	$blog=Blog::find()->where(['status'=>'1', 'url'=>$url, 'category'=>4])->one();

        $meta = Metatags::find()->where('url = "'.$url.'"')->one();
        $this->setMeta($meta);

    	$blogtags=Blogtag::find()->where(['blogid'=>$blog->id])->all();
        $privatewidget=Privatewidget::find()->where(['status'=>'1', 'pid'=>$blog->id])->orderBy(['order' => SORT_ASC])->all();
        return $this->render('detail', ['blog'=>$blog, 'blogtags'=>$blogtags, 'privatewidget'=>$privatewidget]);
    }
}
?>