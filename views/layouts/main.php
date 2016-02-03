<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.ico">

    <meta name="yandex-verification" content="7743e932608973fc"/>
    <meta name="google-site-verification" content="QA50dQViZPt922rl_LDJW5KvJE0k_EiN66Uuk6D9pjM"/>
    <meta name="wmail-verification" content="b5199296407e634a"/>


    <title>Городская бесплатная служба записи на МРТ и КТ</title>

    
    
    <meta name="layout" content="mrt-layout"/>

    <meta name="keywords" content="мрт, магнитно резонансная томография, кт, компьютерная томография, мрт санкт петербург, мрт спб, мрт головного мозга, мрт позвоночника, мрт коленного сустава, кт брюшной полости, кт легких, кт головного мозга,  кт позвоночника"/>
    <meta name="description" content="В нашей клинике Вы можете пройти следующие мрт и кт исследования: мрт (томография) головного мозга, мрт позвоночника, мрт коленного сустава,  компьютерная томография (кт) головного мозга, кт брюшной полости, кт легких, кт позвоночника и т.д."/>

    <!--link href="/static/css/my.css" type="text/css" rel="stylesheet" media="screen, projection" />


    <link rel="stylesheet" href="/css/flatly/bootstrap.min.css">
    <link href="/css/flatly/docs.min.css" rel="stylesheet"-->

    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                
                    
                    <li class="active">
                        <a href="/">Служба записи</a>
                    </li>
                    
                    
                
                    
                    <li class="">
                        <a href="/faq_mrt">О МРТ</a>
                    </li>
                    
                    
                        <li class="dropdown">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                
                                    <li><a href="/faq_mrt/strah_mrt">Страх МРТ</a></li>
                                
                                    <li><a href="/faq_mrt/opisaniye_mrt">Описание Технологии МРТ</a></li>
                                
                                    <li><a href="/faq_mrt/pole">Поле МРТ</a></li>
                                
                                    <li><a href="/faq_mrt/otkrytyy">МРТ открытого типа</a></li>
                                
                                    <li><a href="/faq_mrt/mrt_ili_kt">МРТ или КТ</a></li>
                                
                                    <li><a href="/faq_mrt/mrt_protivopokazaniya_mrt">МРТ противопоказания</a></li>
                                
                                    <li><a href="/faq_mrt/mrt_opasnost">Вред МРТ</a></li>
                                
                                    <li><a href="/faq_mrt/besplatno">Как сделать МРТ бесплатно</a></li>
                                
                                    <li><a href="/faq_mrt/mrt_nochyu">МРТ ночью</a></li>
                                
                                    <li><a href="/faq_mrt/sankt-peterburg_mrt">МРТ в Санкт-Петербурге</a></li>
                                
                                    <li><a href="/faq_mrt/nedorogo_deshevo">МРТ недорого</a></li>
                                
                                    <li><a href="/faq_mrt/kruglosutochnomrt">МРТ Круглосуточно</a></li>
                                
                                    <li><a href="/faq_mrt/mrt_detyam">МРТ детям</a></li>
                                
                                    <li><a href="/faq_mrt/diagnostika">МРТ Диагностика</a></li>
                                
                                    <li><a href="/faq_mrt/vse_telo">МРТ всего тела</a></li>
                                
                                    <li><a href="/faq_mrt/pokazania">Показания к МРТ</a></li>
                                
                                    <li><a href="/faq_mrt/gm_mrt_pok">Показания к МРТ Головного Мозга</a></li>
                                
                                    <li><a href="/faq_mrt/srochno_bystro">МРТ Срочно</a></li>
                                
                                    <li><a href="/faq_mrt/kak_mrt">Как делают МРТ</a></li>
                                
                                    <li><a href="/faq_mrt/gm">МРТ Головного Мозга</a></li>
                                
                            </ul>
                        </li>
                    
                
                    
                    <li class="">
                        <a href="/fqt">О КТ</a>
                    </li>
                    
                    
                        <li class="dropdown">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                
                                    <li><a href="/fqt/sankt-peterburg">КТ в Санкт-Петербурге</a></li>
                                
                                    <li><a href="/fqt/tekhnologiya_kt">Технология КТ</a></li>
                                
                                    <li><a href="/fqt/mskt">МСКТ</a></li>
                                
                                    <li><a href="/fqt/podgotovka">Подготовка</a></li>
                                
                                    <li><a href="/fqt/kontrast">Контраст</a></li>
                                
                                    <li><a href="/fqt/kruglosutochno">Круглосуточно</a></li>
                                
                                    <li><a href="/fqt/diagnostikakt">КТ Диагностика</a></li>
                                
                                    <li><a href="/fqt/besplatnokt">Как сделать КТ бесплатно</a></li>
                                
                                    <li><a href="/fqt/vse_telokt">КТ всего тела</a></li>
                                
                                    <li><a href="/fqt/kak_kt">Как делают КТ</a></li>
                                
                                    <li><a href="/fqt/kakie_kt">Какие бывают аппараты КТ</a></li>
                                
                                    <li><a href="/fqt/kt_detyam">КТ детям</a></li>
                                
                                    <li><a href="/fqt/kt_nochuy">КТ ночью</a></li>
                                
                                    <li><a href="/fqt/nedorogo_kt">КТ дешево</a></li>
                                
                                    <li><a href="/fqt/vredkt">Опасность КТ</a></li>
                                
                                    <li><a href="/fqt/pokazaniyakt">Показания КТ</a></li>
                                
                                    <li><a href="/fqt/srochno_bystrokt">Срочное КТ</a></li>
                                
                                    <li><a href="/fqt/protivopokazaniyakt">Противопоказания КТ</a></li>
                                
                                    <li><a href="/fqt/strah_kt">Страх КТ</a></li>
                                
                            </ul>
                        </li>
                    
                
                    
                    <li class="">
                        <a href="/vidy_issledovaniy_mrt">МРТ исследования</a>
                    </li>
                    
                    
                        <li class="dropdown">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                
                                    <li><a href="/vidy_issledovaniy_mrt/golovnoy_mozg">Головной мозг</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/sustavy">Суставы</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/pozvonochnik_mrt">Позвоночник</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/angiografiya">Ангиография</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/kishechnik_mrt">Кишечник</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/malyy_taz_mrt">Малый таз</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/chelyust_mrt">Челюсть</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/pochki_mrt">Почки</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/sheya">Шея</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/spina">Спина</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/noga">Нога</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/s_kontrastom">С контрастом</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/krestets_kopchik">Крестец/копчик</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/poyasnitsa">Поясница</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/zheludok">Желудок</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/bryushnaya_polost_mrt">Брюшная полость</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/molochnyye_zhelezy">Молочные железы</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/pechen_mrt">Печень</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/kist">Кисть</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/serdtse">Сердце</a></li>
                                
                                    <li><a href="/vidy_issledovaniy_mrt/nadpochechniki_mrt">Надпочечники</a></li>
                                
                            </ul>
                        </li>
                    
                
                    
                    <li class="">
                        <a href="/vidy_issledovaniy">КТ исследования</a>
                    </li>
                    
                    
                        <li class="dropdown">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                
                                    <li><a href="/vidy_issledovaniy/gm_mrtkt">Головной мозг</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/bryushnaya_polost">Брюшная полость</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/legkiye">Легкие</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/koronarografiya">Коронарография</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/grudnaya_kletka">Грудная клетка</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/nos">Нос</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/chelyust">Челюсть</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/visochnaya_kost">Височная кость</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/pochki">Почки</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/pozvonochnik">Позвоночник</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/kishechnik">Кишечник</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/kt_angiografiya">КТ ангиография</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/nadpochechniki">Надпочечники</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/malyy_taz">Малый таз</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/klyuchitsa">Ключица</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/sustavy_kt">Суставы</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/pechen">Печень</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/sosudy">Сосуды</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/gortan">Гортань</a></li>
                                
                                    <li><a href="/vidy_issledovaniy/kopchik">Копчик</a></li>
                                
                            </ul>
                        </li>
                    
                
                    
                    <li class="">
                        <a href="/stati">Статьи</a>
                    </li>
                    
                    
                        <li class="dropdown">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                
                                    <li><a href="/stati/tehnologiya_kt">Поговорим о Технологии</a></li>
                                
                                    <li><a href="/stati/tehnika_kt">Поговорим о технике</a></li>
                                
                                    <li><a href="/stati/istoria_kt">История</a></li>
                                
                                    <li><a href="/stati/istoriya_mrt">История МР</a></li>
                                
                                    <li><a href="/stati/tehnologiya_mrt">Поговорим о Технологиях МР</a></li>
                                
                                    <li><a href="/stati/tehnika_mrt">Поговорим о технике МР</a></li>
                                
                                    <li><a href="/stati/fizika_kt">Поговорим о физике</a></li>
                                
                                    <li><a href="/stati/naychno">Научно популярно МР</a></li>
                                
                                    <li><a href="/stati/uglublenno">Углубленно МР</a></li>
                                
                            </ul>
                        </li>
                    
                
                    
                    <li class="">
                        <a href="/dopolnitelno">Дополнительно</a>
                    </li>
                    
                    
                        <li class="dropdown">
                            <a href="/" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                
                                    <li><a href="/dopolnitelno/mrt_saintpetersburg">МРТ в Санкт-Петербурге</a></li>
                                
                                    <li><a href="/dopolnitelno/mrt_head">МРТ головного мозга</a></li>
                                
                                    <li><a href="/dopolnitelno/mrt_back">МРТ позвоночника</a></li>
                                
                                    <li><a href="/dopolnitelno/mrt_spb">МРТ в СПб</a></li>
                                
                                    <li><a href="/dopolnitelno/computer_tomography">Компьютерная томография</a></li>
                                
                                    <li><a href="/dopolnitelno/computer_tomography_spb">Компьютерная Томография в СПб</a></li>
                                
                            </ul>
                        </li>
                    
                
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="sidebar hidden-print hidden-xs" role="complementary">

            

<div class="map">
</div>

<div class="hidden-xs" style="position: relative">
    <img class="sidebar-avatar" src="images/avatar.jpg"/>
</div>

<h3 class="title">
    <a href="/">Городская служба записи на МРТ и КТ исследования
        <br/><small>в Санкт-Петербурге</small>
    </a>
</h3>

<div style="text-align: center"><img style="width: 240px" src="images/phone.png" alt="Центр записи"/></div>

<p style="text-align: center">
    <i>
        Рабочие дни: 08:00—23:00;<br/>
        Выходные дни: 09:00—21:00
    </i>
</p>

<p style="padding: 20px 20px 20px 30px">
    <span class="glyphicon glyphicon-ok"></span> подбор оптимальной клиники и запись на обследование<br>
    
    
    <span class="glyphicon glyphicon-ok"></span> запись по всем районам города<br>
    <span class="glyphicon glyphicon-ok"></span> скидки при записи через нас<br>
</p>

        </div>

        <div class="col-sm-3">
        </div>

        <div class="col-sm-9" style="padding: 20px 10px 20px 30px; margin-top: 60px">
            <div class="visible-xs">
                

<div class="map">
</div>

<div class="hidden-xs" style="position: relative">
    <img class="sidebar-avatar" src="images/avatar.jpg"/>
</div>

<h3 class="title">
    <a href="/">Городская служба записи на МРТ и КТ исследования
        <br/><small>в Санкт-Петербурге</small>
    </a>
</h3>

<div style="text-align: center"><img style="width: 240px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAA8CAYAAAC+X2l1AAAEXklEQVR42u3dUXLkIAxF0d7/ppkVJDOZ2EhPOreqP9OhkdA1GOPPBwAAAAAAAAAAAACAf+d884EYAwBCC/P5wWd7n7/ZHyQ8P4+NNUwfW6Py960feB74TClQp0l/TErmG/12GudxwlhLHK/nxU+a4N7+nVP6tlVB7pS4nYVX1a4pSfxmf6UU4GkFrMNvIOBMAUeK+Okf0iV5E2acHS9Kpi5XTSvC5EDABBxex5LkWxXY7km/UcI3+uk0LsTkQMAEPEDCBJwv4NMk9gRcHzdyIGACDqljlQXrjb9PFHDV8uonOHlvxTE1bj/5fgIm4G4Cfvo3mP3+4Ls3CLiq2E6YBd+MY8e4vZ0LBEzAFXt1qnwzZvb7+dwV51NyuSngT8NES0veCgF3idv05yK7jNfP4D6+NQY3toWA/6OA3hJw10RLSt7v2viWgDvFbfqhBF3GKwETcIurzXQBTwrg9t3Qf2tj1zgmjgnFX1+n5GHkuKg88IKAswTc/fd3jyMBE7D+J2ACJuDYYvMv7SJgAiDgfbJz//fhIHV6MQEB9961ScBff8fGjVrddkETsNlvSwGfF/52chCrT1XqPvtNvTp/eva7QRKpjyGR7922rHr+9+3krT7IfkPyJ71Sb8ry2Gkwniae/921hhGw1Yd2s8vqDp3w4HxaXrxxQTB5eazj4QkEvEfEHVclHT95qUM3La1ULrWkCHjjElnH4wMJmIA7Cji+MzvJ90anJm/eOcF58aR8O8Wx82s1CbhPn5NvrjMiCm1K0qbeOzyhefGbdnSPY6e3Mv3mOzrPTir/z9NxSpgJpgp45Q7oxOWbxHuHJzQv3pr9dohj6tuPCPjr/1OdCwQ8UMJd3n2bMvPbsr2+8/Jt9zi+HbeKWdV2AXfICX19Z6VhjICdhJUp3w4CTj0p6kbcKjZ1kQIBT3m1IgET8JXZzUQBd41j5fukCTj/BSLdBbzpQmeEgCt2fqYP6KTHsbotK1XeI+r6cngCJuBtAk5rKwGHLV2e8LyYJuCquBEwAd/q67RlXQIm4Gj5EnD/uHURsGI7v58JuLDBBNzj3uGEnJgk4ElHphKwtmrzsFkwAc+ULwHPO7GNgPvks/4l4KsbU7olb+pGGgK+I+Ck+/RnaIG93f5tm5gqVwNXXuhsEnBSEa869YWAM+K2QcDdxqvZ753bcZv6ue2JPZX37gjYa+oS4vb2WdApS7dV4/XJthNwjzO323V2wiyGgO/ELQUCnnF27pbxul2+W/u51Sx4QsFKF7DXpuXFbXKx2jBet4wfAi4qvBuKFQETcMppXNMe3Uker+S7+0Ln2tLj1EK1ScBJbBPwZ2ihmjxeN42dj37uMfup7lACnj/73Srg37YzNY5p+0e2jZuqeEey/QjGzej/XTEVV/VrUh8fAxbiDgAwE4KYA4BiDDEHACjIEGsAUJQh1gAAhVmMxRgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAsJ4/I/TSjTMKNbYAAAAASUVORK5CYII=" alt="Центр записи"/></div>

<p style="text-align: center">
    <i>
        Рабочие дни: 08:00—23:00;<br/>
        Выходные дни: 09:00—21:00
    </i>
</p>

<p style="padding: 20px 20px 20px 30px">
    <span class="glyphicon glyphicon-ok"></span> подбор оптимальной клиники и запись на обследование<br>
    
    
    <span class="glyphicon glyphicon-ok"></span> запись по всем районам города<br>
    <span class="glyphicon glyphicon-ok"></span> скидки при записи через нас<br>
</p>

            </div>
            

<ol class="breadcrumb">
     <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        
            <!--li class="active">Служба записи</li-->
        
    
</ol>


    <div itemscope itemtype="http://schema.org/Article">
        <?= $content ?>
    </div>



    



        </div>
    </div>
</div>

<!-- Yandex.Metrika counter -->

<noscript><div><img src="//mc.yandex.ru/watch/22208978" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->






<script src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript" ></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript" ></script>
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22208978 = new Ya.Metrika({id:22208978,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
          w.yaCounter = w.yaCounter22208978;
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");

    $('.trigger').popover({
        trigger: 'hover'
    });
    $('.trigger-right').popover({
        trigger: 'hover',
        placement: 'right'
    });
    $(function () {
        $('.ckeditor table').addClass('table table-striped');
        $('.ckeditor img').css('margin', "0 25px 5px 5px");
    });
</script>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>