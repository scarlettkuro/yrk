<?php

/* @var $this yii\web\View */

use yii\widgets\Breadcrumbs;
$this->title = $title;
$this->params['nav'] = $nav;
?>

<? if(isset($breadcrumbs)) :?>
<ol class="breadcrumb">
     <?= Breadcrumbs::widget(['links' => $breadcrumbs]) ?>   
</ol>
<? endif; ?>


<div itemscope itemtype="http://schema.org/Article">
   <?= $text ?>
</div>