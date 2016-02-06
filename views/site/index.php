<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = $title;
$this->params['nav'] = $nav;
$this->params['href'] = $href;
?>

<? if(isset($breadcrumbs)) :?>
<ol class="breadcrumb">
    <? $count =  count($breadcrumbs); 
    foreach(array_slice($breadcrumbs,1, $count-2) as $breadcrumb) : ?>
        <li><a href="<?=Url::toRoute(['site/index', 'href' => $breadcrumb['url']])?>"><?=$breadcrumb['label']?></a></li>
    <? endforeach; ?>
    <li><?=$breadcrumbs[$count-1]['label']?></li>
</ol>
<? endif; ?>
<h2 itemprop="name"><?=$title?></h2>

<div itemscope itemtype="http://schema.org/Article">
   <?= $text ?>
</div>