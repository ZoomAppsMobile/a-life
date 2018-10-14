<?php

namespace backend\controllers;

use Yii;
use common\models\Docs;
use yii\web\Controller;
use yii\web\UploadedFile;

/**
 * DocsController implements the CRUD actions for Docs model.
 */
class DocsController extends Controller
{
    public function actionCreate($id)
    {
        $model = new Docs();

        if ($model->load(Yii::$app->request->post())) {
            $model->files = UploadedFile::getInstances($model, 'files');

            foreach($model->files as $file) {
//                echo '<pre>'. print_r($file->extension, true). '</pre>';
                $model1 = new Docs();
                $time = time();
                $file->saveAs($model1->path . $time . $file->baseName . '.' . $file->extension);

                $model1->file = $time . $file->baseName . '.' . $file->extension;
                $model1->title = "";
                $model1->text = "";
//                $model1->category_id = $id;
                $model1->save(false);
            }

        }
        $this->redirect(['menu/view', 'id' => $id]);
    }

    public function actionEdit($id)
    {
        if (Yii::$app->request->post()) {

            $post = Yii::$app->request->post();

            foreach($post['Docs']['id'] as $k => $v){
                $model = Docs::findOne($post['Docs']['id'][$k]);
                $model->title = $post['Docs']['title'][$k];
                $model->text = $post['Docs']['text'][$k];
                $model->save(false);
            }

        }

        $this->redirect(['menu/view', 'id' => $id]);
    }

    public function actionMoveUp($id, $menu_id)
    {
        $model = Docs::findOne($id);
        if ($model->sort != 1) {
            $sort = $model->sort - 1;
            $model_down = Docs::find()->where("sort = $sort")->one();
            $model_down->sort += 1;
            $model_down->save();

            $model->sort -= 1;
            $model->save();
        }
        $this->redirect(['menu/view', 'id' => $menu_id]);
    }

    public function actionMoveDown($id, $menu_id)
    {
        $model = Docs::findOne($id);
        $model_max_sort = Docs::find()->orderBy("sort DESC")->one();

        if ($model->id != $model_max_sort->id) {
            $sort = $model->sort + 1;
            $model_up = Docs::find()->where("sort = $sort")->one();
            $model_up->sort -= 1;
            $model_up->save();

            $model->sort += 1;
            $model->save();
        }
        $this->redirect(['menu/view', 'id' => $menu_id]);
    }

    public function actionDelete($id, $menu_id)
    {
        $model = Docs::findOne($id);
        $models = Docs::find()->where('sort > '.$model->sort)->all();

        foreach($models as $v){
            $v->sort--;
            $v->save(false);
        }

        Docs::deleteAll(['id' => $id]);

        $this->redirect(['menu/view', 'id' => $menu_id]);
    }
}
