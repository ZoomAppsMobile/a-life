<?php

namespace backend\controllers;

use Yii;
use common\models\Pravlenie;
use backend\models\search\PravlenieSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
class PravlenieController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new PravlenieSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Pravlenie();

        if ($model->load(Yii::$app->request->post())) {
            $model->img = UploadedFile::getInstances($model, 'img');

            $time = time();
            foreach($model->img as $file){
                $file->saveAs($model->path . $time . $file->baseName . '.' . $file->extension);
                $model->img = $time . $file->baseName . '.' . $file->extension;
                break;
            }

            if($model->save(false)){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $images = $model->img;

        if ($model->load(Yii::$app->request->post())) {
            $img = UploadedFile::getInstances($model, 'img');

            $time = time();
            if(count($img) > 0){
                foreach ($img as $file) {
                    $file->saveAs($model->path . $time . $file->baseName . '.' . $file->extension);
                    $model->img = $time . $file->baseName . '.' . $file->extension;
                    break;
                }
            }else{
                $model->img = $images;
            }

            if($model->save(false)){
                return $this->redirect(['view', 'id' => $id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Pravlenie::findOne($id);
        $models = Pravlenie::find()->where('sort > '.$model->sort)->all();

        foreach($models as $v){
            $v->sort--;
            $v->save(false);
        }

        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Pravlenie::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionMoveUp($id)
    {
        $model = Pravlenie::findOne($id);
        if ($model->sort != 1) {
            $sort = $model->sort - 1;
            $model_down = Pravlenie::find()->where("sort = $sort")->one();
            $model_down->sort += 1;
            $model_down->save(false);

            $model->sort -= 1;
            $model->save(false);
        }
        $this->redirect(['index']);
    }

    public function actionMoveDown($id)
    {
        $model = Pravlenie::findOne($id);
        $model_max_sort = Pravlenie::find()->orderBy("sort DESC")->one();

        if ($model->id != $model_max_sort->id) {
            $sort = $model->sort + 1;
            $model_up = Pravlenie::find()->where("sort = $sort")->one();
            $model_up->sort -= 1;
            $model_up->save(false);

            $model->sort += 1;
            $model->save(false);
        }
        $this->redirect(['index']);
    }
}
