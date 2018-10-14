<?php

namespace frontend\widgets;

use common\models\Menu;
use yii\base\Widget;

class MenuWidget extends Widget
{
    public function run()
    {
        $model = Menu::find()->where('top = 1 AND status = 1')->orderBy('sort_top ASC')->all();

        return $this->render('menu', compact('model'));
    }
}