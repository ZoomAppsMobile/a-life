<?php

namespace frontend\widgets;

use common\models\Menu;
use yii\base\Widget;

class FooterMenuWidget extends Widget
{
    public function run()
    {
        $model = Menu::find()->where('footer = 1 AND status = 1')->orderBy('sort_footer ASC')->all();

        return $this->render('footer-menu', compact('model'));
    }
}