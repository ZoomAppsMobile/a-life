<?php

namespace backend\controllers;

use Yii;
use backend\models\Widget;
use backend\models\Widgetitem;
use backend\models\WidgetitemSearch;
use backend\models\Tableitem;
use backend\models\Model;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
class WidgetitemController extends BackendController
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
        $model = new Widgetitem();
        $modelsTag = [new Tableitem];
        if ($model->load(Yii::$app->request->post())) {
            $model->wid=$id;
            $model->save(false);

            $modelsTag = Model::createMultiple(Tableitem::classname());
            Model::loadMultiple($modelsTag, Yii::$app->request->post());
            
            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsTag) && $valid;
           
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                      foreach ($modelsTag as $mod) {
                            $mod->itemid = $model->id;
                            if (! ($flag = $mod->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['/widget/view', 'id' => $id]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }

            
        } else {
            $wtype=Widget::findOne($id);
            if($wtype->type=='1'){


                return $this->renderAjax('create', [
                    'model' => $model,
                    'id'=> $id,
                    'modelsTag' => (empty($modelsTag)) ? [new Tableitem] : $modelsTag
                ]);
            }
            return $this->renderAjax('create', [
                'model' => $model,
                'id'=> $id,
            ]);
        }
    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelsTag = $model->items;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $oldIDs2 = ArrayHelper::map($modelsTag, 'id', 'id');
            $modelsTag = Model::createMultiple(Tableitem::classname(), $modelsTag);
            Model::loadMultiple($modelsTag, Yii::$app->request->post());
            $deletedIDs2 = array_diff($oldIDs2, array_filter(ArrayHelper::map($modelsTag, 'id', 'id')));
            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($modelsTag) && $valid;

            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        if (! empty($deletedIDs2)) {
                           Quran::deleteAll(['id' => $deletedIDs2]);
                        }
                       
                        foreach ($modelsTag as $modT) {
                            $modT->itemid = $model->id;
                            if (! ($flag = $modT->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        return $this->redirect(['/widget/view', 'id' => $model->wid]);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();
                }
            }
             
        } else {
            $wtype=Widget::findOne($model->wid);
            if($wtype->type=='1'){
                return $this->renderAjax('update', [
                    'model' => $model,
                    'id'=> $id,
                    'modelsTag' => (empty($modelsTag)) ? [new Tableitem] : $modelsTag
                ]);
            }
            return $this->renderAjax('update', [
                'model' => $model,

            ]);
        }
    }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    protected function findModel($id)
    {
        if (($model = Widgetitem::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
