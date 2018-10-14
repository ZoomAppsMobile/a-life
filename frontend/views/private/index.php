<?php
use backend\models\Blog;
$this->registerCssFile('/frontend/web/css/private/style.css');
?>

<?php

if(count($blogcategory)>0){
    foreach ($blogcategory as $key) {
        ?>
            <h3 class="text-uppercase my-1 my-md-5 main-text font-weight-bold"><?php
               echo $key->setLang('title');
            ?></h3>
            <div class="main-text d-flex flex-md-row flex-column">
                <?php
                    $blogs=Blog::find()->where(['status'=>'1', 'category'=>$key->id])->all();
                    foreach ($blogs as $val) {
                        $valtitle=$val->setLang('title');
                        $valdescription=$val->setLang('description');
                        echo '<div class="private-customers-wrap">
                            <a href="/private-clients/'.$val->url.'">
                                <img src="'.$val->thumb.'" alt="">
                                <div class="private-customers-wrap-block" style="width:90%;">
                                <h4 class="text-uppercase font-weight-bold" style="font-size: 0.8rem;cursor:pointer;">'.$valtitle.'</h4>
                                <span style="cursor:pointer;">'.$valdescription.'</span>
                                </div>
                            </a>
                        </div>' ;
                    }
                ?>

            </div>

        <?php
    }
}
?>
<script>
    jQuery(document).ready(function($){
        AOS.init({
            offset: 0,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 100,
//            disable: window.innerWidth < 768
        });
    });

</script>