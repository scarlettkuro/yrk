<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

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
                <? foreach($this->params['nav'] as $category) :?>
                <li class="<?= $this->params['href']==$category['href']?  "active" : ""?>">
                    <a href="<?=Url::toRoute(['site/index', 'href' => $category['href']])?>"><?=$category['name']?></a>
                </li>
                <? if(isset($category['list']) && count($category['list'])) :?>
                <li class="dropdown">
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <? foreach($category['list'] as $article) :?>
                        <li><a href="<?=Url::toRoute(['site/index', 'href' => $article['href']])?>">
                            <?=$article['name']?>
                        </a></li>
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

            <div class="map"></div>

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

        <div class="col-sm-3"></div>

        <div class="col-sm-9" style="padding: 20px 10px 20px 30px; margin-top: 60px">
            <div class="visible-xs">


            <div class="map"></div>

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

            <?= $content ?>   

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