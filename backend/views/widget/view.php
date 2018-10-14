<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

$this->title = $model->forblog;
?>
<?php
        Modal::begin([
            'id'=>'modal',
            'size'=>'modal-lg',
             'closeButton' => ['label' => '<p>×</p>'],
        ]);
        echo '<div id="modalContent"></div>';
        Modal::end();
    ?>
<div class="widget-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
          <li><a href="/admin">Главная</a></li>
          <li><a href="/admin/widget">Виджеты</a></li>
          <li class="active"><?= Html::encode($this->title) ?></li>
    </ol>
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'title',
            'title_kz',
            'title_en',
        ],
    ]) ?>

</div>
<p><?=Html::button('+' , ['value'=>Url::to('/admin/widgetitem/create?id='.$model->id),'class'=>'btn btn-success blogtagajax']);?>
</p>
<?php

    if(count($widgetitem)>0){
        if($model->type=='0'){
echo '<table class="table table-striped table-bordered">
                        <thead>
                            <tr>    
                                <th>Заголовок</th>
                                <th>Заголовок Kz</th>
                                <th>Заголовок En</th>
                                <th>Ссылка</th>
                                <th>Порядок</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach ($widgetitem as $key) {
                            echo    '<tr>
                                        <td><img class="tag-icon" src="'.$key->icon.'"> '.$key->title.'</td>
                                        <td><img class="tag-icon" src="'.$key->icon.'"> '.$key->title_kz.'</td>
                                        <td><img class="tag-icon" src="'.$key->icon.'"> '.$key->title_en.'</td>
                                        <td>'.$key->url.'</td>
                                        <td>
                                            '.$key->order.'
                                        </td>
                                        <td>
                                            '.Html::button('<span class="glyphicon glyphicon-pencil"></span>' , ['value'=>Url::to('/admin/widgetitem/update?id='.$key->id),'class'=>'btn btn-success blogtagajax']).'
                                            <a href="/admin/widget/deleteitem/'.$key->id.'" title="Удалить" class="btn btn-danger" aria-label="Удалить" data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post" data-pjax="0">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>';
                        }
                        echo '</tbody>
                    </table>';
        } else if($model->type=='1'){
                echo '<table class="table table-striped table-bordered">
                        <thead>
                            <tr>    
                                <th>Заголовок</th>
                                <th>Заголовок Kz</th>
                                <th>Заголовок En</th>
                                <th>Порядок</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach ($widgetitem as $key) {
                            echo    '<tr>
                                        <td>'.$key->title.'</td>
                                        <td>'.$key->title_kz.'</td>
                                        <td>'.$key->title_en.'</td>                                       
                                        <td>
                                            '.$key->order.'
                                        </td>
                                        <td>
                                            '.Html::button('<span class="glyphicon glyphicon-pencil"></span>' , ['value'=>Url::to('/admin/widgetitem/update?id='.$key->id),'class'=>'btn btn-success blogtagajax']).'
                                            <a href="/admin/widget/deleteitem/'.$key->id.'" title="Удалить" class="btn btn-danger" aria-label="Удалить" data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post" data-pjax="0">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>';
                        }
                        echo '</tbody>
                    </table>';
        }  else if($model->type=='2'){
                echo '<table class="table table-striped table-bordered">
                        <thead>
                            <tr>    
                                <th>Заголовок</th>
                                <th>Заголовок Kz</th>
                                <th>Заголовок En</th>
                                <th>Порядок</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach ($widgetitem as $key) {
                            echo    '<tr>
                                        <td>'.$key->title.'</td>
                                        <td>'.$key->title_kz.'</td>
                                        <td>'.$key->title_en.'</td>                                     
                                        <td>
                                            '.$key->order.'
                                        </td>
                                        <td>
                                            '.Html::button('<span class="glyphicon glyphicon-pencil"></span>' , ['value'=>Url::to('/admin/widgetitem/update?id='.$key->id),'class'=>'btn btn-success blogtagajax']).'
                                            <a href="/admin/widget/deleteitem/'.$key->id.'" title="Удалить" class="btn btn-danger" aria-label="Удалить" data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post" data-pjax="0">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>';
                        }
                        echo '</tbody>
                    </table>';
        } else if($model->type=='3'){
                echo '<table class="table table-striped table-bordered">
                        <thead>
                            <tr>    
                                <th>Заголовок</th>
                                <th>Заголовок Kz</th>
                                <th>Заголовок En</th>
                                <th>Описание</th>
                                <th>Описание Kz</th>
                                <th>Описание En</th>
                                <th>Порядок</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach ($widgetitem as $key) {
                            echo    '<tr>
                                        <td>'.$key->title.'</td>
                                        <td>'.$key->title_kz.'</td>
                                        <td>'.$key->title_en.'</td>  
                                        <td>'.$key->description.'</td>
                                        <td>'.$key->description_kz.'</td>
                                        <td>'.$key->description_en.'</td>                                      
                                        <td>
                                            '.$key->order.'
                                        </td>
                                        <td>
                                            '.Html::button('<span class="glyphicon glyphicon-pencil"></span>' , ['value'=>Url::to('/admin/widgetitem/update?id='.$key->id),'class'=>'btn btn-success blogtagajax']).'
                                            <a href="/admin/widget/deleteitem/'.$key->id.'" title="Удалить" class="btn btn-danger" aria-label="Удалить" data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post" data-pjax="0">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>';
                        }
                        echo '</tbody>
                    </table>';
        }
        else if($model->type=='4'){
                echo '<table class="table table-striped table-bordered">
                        <thead>
                            <tr>    
                                <th>Заголовок</th>
                                <th>Заголовок Kz</th>
                                <th>Заголовок En</th>
                                <th>Порядок</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach ($widgetitem as $key) {
                            echo    '<tr>
                                        <td>'.$key->title.'</td>
                                        <td>'.$key->title_kz.'</td>
                                        <td>'.$key->title_en.'</td>                                     
                                        <td>
                                            '.$key->order.'
                                        </td>
                                        <td>
                                            '.Html::button('<span class="glyphicon glyphicon-pencil"></span>' , ['value'=>Url::to('/admin/widgetitem/update?id='.$key->id),'class'=>'btn btn-success blogtagajax']).'
                                            <a href="/admin/widget/deleteitem/'.$key->id.'" title="Удалить" class="btn btn-danger" aria-label="Удалить" data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post" data-pjax="0">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>';
                        }
                        echo '</tbody>
                    </table>';
        }
    }



?>