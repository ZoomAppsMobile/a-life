<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;
use yii\helpers\Url;
$this->title = $model->title;
?>
<div class="blog-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <ol class="breadcrumb">
      <li><a href="/admin">Главная</a></li>
      <li><a href="/admin/blog" >Частным клиентам</a></li>
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
    
    <?php
        Modal::begin([
            'id'=>'modal',
            'size'=>'modal-md',
             'closeButton' => ['label' => '<p>×</p>'],
        ]);
        echo '<div id="modalContent"></div>';
        Modal::end();
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'title_kz',
            'title_en',
            'description',
            'description_kz',
            'description_en',
            'thumb:image',
            'image:image',
            'content:ntext',
            'content_kz:ntext',
            'content_en:ntext',
            'note',
            'note_kz',
            'note_en',
            'url:url',
            'order',
        ],
    ]) ?>


<p><?=Html::button('Добавить тег' , ['value'=>Url::to('/admin/blogtag/create?id='.$model->id),'class'=>'btn btn-success blogtagajax']);?>
</p>

<?php
        if(count($blogtags)>0){
            echo '<table class="table table-striped table-bordered">
                        <thead>
                            <tr>    
                                <th>Заголовок</th>
                                <th>Заголовок Kz</th>
                                <th>Заголовок En</th>
                                <th>Ссылка</th>
                                <th>Документ</th>
                                <th>Документ Kz</th>
                                <th>Документ En</th>
                                <th>Порядок</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach ($blogtags as $key) {
                            echo    '<tr>
                                        <td><img class="tag-icon" src="'.$key->icon.'"> '.$key->title.'</td>
                                        <td><img class="tag-icon" src="'.$key->icon.'"> '.$key->title_kz.'</td>
                                        <td><img class="tag-icon" src="'.$key->icon.'"> '.$key->title_en.'</td>
                                        <td>'.$key->url.'</td>
                                        <td>
                                            <a href="http://asialife.loc/'.$key->file.'">
                                                Документ
                                            </a>
                                        </td>
                                        <td>
                                            <a href="http://asialife.loc/'.$key->file_kz.'">
                                                Документ Kz
                                            </a>
                                        </td>
                                        <td>
                                            <a href="http://asialife.loc/'.$key->file_en.'">
                                                Документ En
                                            </a>
                                        </td>
                                        <td>
                                            '.$key->order.'
                                        </td>
                                        <td>
                                            '.Html::button('<span class="glyphicon glyphicon-pencil"></span>' , ['value'=>Url::to('/admin/blogtag/update?id='.$key->id),'class'=>'btn btn-success blogtagajax']).'
                                            <a href="/admin/blog/deleteblogtag/'.$key->id.'" title="Удалить" class="btn btn-danger" aria-label="Удалить" data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post" data-pjax="0">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>';
                        }
                        echo '</tbody>
                    </table>';
        }
    ?>

<!--    <p>--><?//=Html::button('Добавить виджет' , ['value'=>Url::to('/admin/privatewidget/create?id='.$model->id),'class'=>'btn btn-success blogtagajax']);?>
</p>
<?php
        if(count($privatewidget)>0){
            echo '<table class="table table-striped table-bordered">
                        <thead>
                            <tr>    
                                <th>Заголовок</th>
                                <th>Порядок</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach ($privatewidget as $key) {
                            echo    '<tr>
                                        <td> '.$key->title.'</td>
                                       
                                        <td>
                                            '.$key->order.'
                                        </td>
                                        <td>
                                            '.Html::button('<span class="glyphicon glyphicon-pencil"></span>' , ['value'=>Url::to('/admin/privatewidget/update?id='.$key->id),'class'=>'btn btn-success blogtagajax']).'
                                            <a href="/admin/blog/deletepw/'.$key->id.'" title="Удалить" class="btn btn-danger" aria-label="Удалить" data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post" data-pjax="0">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>';
                        }
                        echo '</tbody>
                    </table>';
        }
    ?>
</div>
<style type="text/css">
    td img{
        max-width: 300px;
    }
    .modal-header .close {
        margin-top: -2px;
        font-size: 45px;
        opacity: 0.66;
        margin-right: 15px;
    }
    .modal-header {
        border-bottom-color: #f4f4f4;
        padding: 0;
    }
    .modal-body {
        position: relative;
        padding: 0 15px 15px;
    }
</style>