<?php
session_start();
if (strpos($_SERVER['REQUEST_URI'], 'basket=clear') !== false) {
    if (isset($_COOKIE['goods'])) {
        foreach($_COOKIE['goods'] as $key => $value) {
            setcookie("goods[".$key."]", "", 1);
        }
    }
    header("Location: /");
    exit;
}
$LastModifiedUnix = time();
$LastModified = gmdate("D, d M Y H:i:s", $LastModifiedUnix)." GMT";
$IfModifiedSince = false;
if (isset($_ENV['HTTP_IF_MODIFIED_SINCE'])) $IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));
if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) $IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
if ($IfModifiedSince && $IfModifiedSince >= $LastModifiedUnix) {
    @header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
    exit;
}
@header('Last-Modified: '. $LastModified);
$cfg = array();
$cfg['xmlclient'] = FALSE;
$cfg['doctypeid'] = "<!DOCTYPE html>";
$contenttype = ($cfg['doctypeid']>2 && $cfg['xmlclient']) ? 'application/xhtml+xml' : 'text/html; charset=utf-8';
@header('Expires: Fri, Apr 01 1974 00:00:00 GMT');
@header('Cache-Control: post-check=0,pre-check=0', FALSE);
@header('Content-Type: '.$contenttype);
@header('Cache-Control: no-store,no-cache,must-revalidate');
@header('Cache-Control: post-check=0,pre-check=0', FALSE);
@header('Pragma: no-cache');

@require_once("inc/mainfile.php");

// Запрос контента
if (isset($_GET['url'])) {$url = mysql_real_escape_string($_GET['url']);} else {$url = "index";}
$result_contents = mysql_query("SELECT * FROM ".$db_prefix."news WHERE url = '$url'");
$row_contents = mysql_fetch_assoc($result_contents);

$keywords = $row_contents['keywords'];
$description = $row_contents['description'];
$row_content_one = $row_contents['content'];
$ContentConstructorProduct = 0;

$result_settings = mysql_query("SELECT * FROM settings WHERE id = '1'");
$row_settings = mysql_fetch_assoc($result_settings);
?>
<!DOCTYPE html>
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <title><?=$row_contents['title'] ?> - ZEIN</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="Keywords" content="<?=htmlspecialchars_decode($keywords, ENT_QUOTES) ?>" />
    <meta name="Description" content="<?=htmlspecialchars_decode($description, ENT_QUOTES) ?> - <?=$row_settings['sitename'] ?>" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.css" />

    <?=htmlspecialchars_decode($row_settings['cssjs'], ENT_QUOTES) ?>
    <script src="/js/main2.js"></script>
</head>
<body>
<style>
    #loading {
        display: block;
        position: absolute;
        z-index: 999;
        top: 50%;
        left: 50%;
        margin-left: -25px;
        margin-top: -25px;
    }
</style>
<!--<div id="loading" style="display: block;">-->
<!--    <img src="/img/loader3.gif">-->
<!--</div>-->
<script>
    //    $(function() {
    //        $('#loading').hide();
    //    });
//    function func(){
//        $('#loading').hide();
//    }
//    setTimeout(func, 1000);

</script>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<?php
    $content = htmlspecialchars_decode("<div class='container'><div class='' style='text-align:center;font-weight:bold;margin-top:20px;'>".$row_contents['title']."</div>
                                        <div style=''>".$row_contents['content']."</div></div>");


    $html = htmlspecialchars_decode($row_settings['header']. $content. $row_settings['footer']);
    require_once("inc/modules/modules.php");
    echo $html;
?>
<link rel="stylesheet" href="/css/sweetalert.css" />
<script src="/js/sweetalert.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.0/aos.js"></script>
<script>



    $(document).ready(function(){

        if($('.block-35').length >= 1) {

            $('.block-35').remove().clone().appendTo(".catalog .col7");
            $('.content.width').removeClass('width');

        }

        AOS.init({
            offset: 50,
            duration: 900,
            easing: 'ease-in-sine',
            delay: 150,
        });

        var preload = $("#main_preload"),
            w = $(window).width() / 2 - 30,
            h = $(window).height() / 2 - 30;
        preload.html('<img src="imgs/dots_2.gif" alt="load content."/>');
        $(window).load(function() {
            setTimeout(function() {
                preload.animate({
                    opacity: "0"
                }, 1000, function() {
                    preload.html("")
                });
                $("#wrapper").animate({
                    opacity: "1"
                }, 1000)
            }, 2000)
        });
        $('.test1').on('click', function() {
            $(this).children('.q-a-drop-text').toggle('slow');
            $(this).children('.q-a-accor').toggleClass('active');
        });

    });

</script>
</body>
</html>