<?php

/* @var $this yii\web\View */

use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->title = $title;
$this->params['nav'] = $nav;
$this->params['href'] = $href;
?>

<? if(isset($breadcrumbs)) :?>
<ol class="breadcrumb">
     <?= Breadcrumbs::widget(['links' => $breadcrumbs]) ?>   
</ol>
<? endif; ?>
<h2 itemprop="name"><?=$title?></h2>

<div itemscope itemtype="http://schema.org/Article">
   <?= $text ?>
</div>