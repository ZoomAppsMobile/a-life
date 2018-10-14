<?php

namespace backend\controllers;

use Yii;
use backend\models\Blogtag;
use backend\models\BlogtagSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class BlogtagController extends BackendController
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
    public function actionCreate($id)
    {
        $model = new Blogtag();

        if ($model->load(Yii::$app->request->post())) {
            $model->blogid=$id;
            $model->save(false);
            return $this->redirect(['/blog/view', 'id' => $id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           return $this->redirect(['/blog/view', 'id' => $model->blogid]);
        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }
    protected function findModel($id)
    {
        if (($model = Blogtag::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
