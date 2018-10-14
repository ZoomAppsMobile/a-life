<?php

namespace backend\controllers;

use Yii;
use backend\models\Blog;
use backend\models\Blogtag;
use backend\models\BlogSearch;
use backend\models\Privatewidget;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class BusinessController extends BackendController
{
    public function beforeAction($action) 
    { 
        $this->enableCsrfValidation = false; 
        return parent::beforeAction($action); 
    }
    public function behaviors()
    {
        define(ROLE_USER, 'admin, manager');
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'logout' => ['post'],
                    ],
                ],
            ]
        );
    }
    public function actionIndex()
    {
        $searchModel = new BlogSearch();
        $searchModel->category=4;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionView($id)
    {
        $blogtags=Blogtag::find()->where(['blogid'=>$id])->all();
        $privatewidget=Privatewidget::find()->where(['pid'=>$id])->orderBy(['order'=>SORT_ASC])->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            'blogtags' => $blogtags,
            'privatewidget'=>$privatewidget,
        ]);
    }
    public function actionCreate()
    {
        $model = new Blog();

        if ($model->load(Yii::$app->request->post())) {
            $model->category=4;
            $model->save(false);
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionDeleteblogtag($id)
    {
        $modelid=$this->findBlogTag($id)->blogid;
        $this->findBlogTag($id)->delete();

        return $this->redirect(['view', 'id' => $modelid]);
    }
    public function actionDeletepw($id)
    {
        $modelid=$this->findPw($id)->pid;
        $this->findPw($id)->delete();

        return $this->redirect(['view', 'id' => $modelid]);
    }
    protected function findModel($id)
    {
        if (($model = Blog::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findBlogTag($id)
    {
        if (($model = Blogtag::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findPw($id)
    {
        if (($model = Privatewidget::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
