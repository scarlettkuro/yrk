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
    <?= Html::csrfMetaTags() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.ico.png">

    <meta name="yandex-verification" content="7743e932608973fc"/>
    <meta name="google-site-verification" content="QA50dQViZPt922rl_LDJW5KvJE0k_EiN66Uuk6D9pjM"/>
    <meta name="wmail-verification" content="b5199296407e634a"/>


    <title><?= $this->title ?></title>
    
    <meta name="layout" content="mrt-layout"/>
    <meta name="keywords" content="мрт, магнитно резонансная томография, кт, компьютерная томография, мрт санкт петербург, мрт спб, мрт головного мозга, мрт позвоночника, мрт коленного сустава, кт брюшной полости, кт легких, кт головного мозга,  кт позвоночника"/>
    <meta name="description" content="В нашей клинике Вы можете пройти следующие мрт и кт исследования: мрт (томография) головного мозга, мрт позвоночника, мрт коленного сустава,  компьютерная томография (кт) головного мозга, кт брюшной полости, кт легких, кт позвоночника и т.д."/>

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
            <? foreach($this->params['nav'] as $name=>$category) :?>
                <li class="<?= $category['active']? "active" : ""?>">
                    <a href="/go/<?=$name?>"><?=$name?></a>
                </li>
                <? if(isset($category['list'])) :?>
                <li class="dropdown">
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <? foreach($category['list'] as $elem) :?>
                        <li><a href="/go/<?=$name?>/<?=$elem?>"><?=$elem?></a></li>
                    <? endforeach;?>
                    </ul>
                </li>
                <? endif; ?>
            <? endforeach;?>
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







<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>