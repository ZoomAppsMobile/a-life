<?php
$this->registerCssFile('/frontend/web/css/news/news/style.css');
?>
<main class="main">
    <div class="main-title">
        <h3>FITCH RATINGS</h3>
        <p class="news-date"><?=$model->dating?></p>
    </div>

    <div class="main-slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?=$model->image?>" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?=$model->image2?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?=$model->image3?>" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <?=$model->id?>

    <div class="last-news">
        <h3>
            Последние новости
        </h3>
    </div>

    <div class="news-item">
        <div class="row">
            <?foreach($news as $v){?>
                <a class="col-lg-3 news-card" href="/news/<?=$v->url?>">
                    <img src="<?=$v->image?>" style=height:300px;">
                    <h6><?=$v->title?></h6>
                    <p class="news-date"><?=$v->dating?></p>
                    <p class="card-content"><?=$v->description?></p>
                </a>
            <?}?>
        </div>
    </div>
</main>