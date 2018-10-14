<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="container request-container">
    <div id="login" class="site-login request">
        <div class="row">
            <div class="col-sm-12">
                      <h1><?= Html::encode($this->title) ?></h1>

            <div class="alert alert-danger">
                <?= nl2br(Html::encode($message)) ?>
            </div>

            <p>
                Произошла ошибка во время выше веб-сервер обработки вашего запроса.
            </p>
            <p>
                Пожалуйста, свяжитесь с нами, если вы думаете, что это ошибка сервера. Спасибо.
            </p>         
            </div>
        </div>
    </div>
</div>
