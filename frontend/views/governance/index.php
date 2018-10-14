<link rel='stylesheet' href='css/pravlenie/style.css'/>
<div data-aos="fade-up" class="accordion accordion-second mt-5" id="accordion3">
    <h3 class="main-head-txt">ПРАВЛЕНИЕ</h3>
</div>
<?foreach($model as $v){?>
    <div data-aos="fade-up" class="accordion accordion-second mt-4" id="accordion3">
        <div class="accordion-group">
            <div class="accordion-heading accordion-heading3" data-toggle="collapse" data-parent="#accordion3"
                 href="#collapse<?=$v->id?>">
                <a class="accordion-toggle d-flex">
                    <div class="col-lg-2 accordion-img">
                        <img src="/backend/web/<?=$v->path.$v->img?>" alt="">
                    </div>
                    <div class="col-lg-10 accordion-content2">
                        <h4><?=$v->setLang('name')?></h4>
                        <p><?=$v->setLang('position')?></p>
                    </div>
                </a>
            </div>
            <div id="collapse<?=$v->id?>" class="accordion-body collapse">
                <div class="accordion-inner d-flex">
                    <div class="col-lg-2 noneblock"></div>
                    <div class="col-lg-10 accordion-inner-content">
                        <p class="red-txt mt-4">
                            Образование:
                        </p>
                        <?=$v->setLang('education')?>
                        <p class="red-txt mt-4">
                            Работа:
                        </p>
                        <?=$v->setLang('job')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?}?>