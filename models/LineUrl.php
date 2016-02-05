<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\web\UrlRuleInterface;

/**
 * Description of LineUrl
 *
 * @author kuro
 */
class LineUrl implements UrlRuleInterface {
    
    
    public function createUrl($manager, $route, $params) {
        return substr(LineUrl::getLineUrl($params['href']),1);
        
    }

    public function parseRequest($manager, $request) {
        if ($request->url == "/") 
            return ["site/index",[]];
        
        $url_parts = explode('/', $request->url);
        $parts = count($url_parts);
        $href = strlen($url_parts[$parts-1]) > 0 ? $url_parts[$parts-1] : $url_parts[$parts-2];
        
        $url = LineUrl::getLineUrl($href);
        
        if ($request->url == $url)
            return ["site/index",['href'=>$href]];
        else
            return ["site/redirect",['url'=>$url]];
    }
    
    
    
    private static function getLineUrl($href) {
        $breadcrumbs = Tree_node::breadcrumbs(Tree_node::find()->where(['href'=>$href])->one()->href);
        $url = '';
        foreach($breadcrumbs as $crumb) 
            $url .=  $crumb['url'] . '/';
        
        return $url;
    }
}
