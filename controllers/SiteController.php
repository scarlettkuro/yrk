<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Tree_node;
use app\models\Filters;

class SiteController extends Controller
{
    
    public function actionIndex($href = "home")
    {
        $node = Tree_node::find()->where(['href' => $href])->one();
        
        $params = [];
        
        $params['href'] = $href;
        $params['nav'] = Tree_node::treeStructure(243); 
        $params['breadcrumbs'] = Tree_node::breadcrumbs($href);
        $params['title'] = $node->title;
        
        $text = $node->text;
        $text = Filters::shortcodeUrls($text);
        $text = Filters::imagesSrc("http://mrt-kt.ru.articles.s3.amazonaws.com/", ".jpg", $text);
        
        $params['text'] = $text;
        
        return $this->render('index', $params);
    }
    
    public function actionRedirect($url = "/")
    {
        return $this->redirect($url);
    }
    
}
