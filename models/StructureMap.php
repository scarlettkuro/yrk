<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of StructureMap
 *
 * @author kuro
 */
class StructureMap {
    
    public static function extract($id) {
        
        $params = ['parent_id' => $id, 'hidden' => 0];
        
        if (!Tree_node::find()->where($params)->exists()) 
            return [];
        
        $articles = Tree_node::find()->where($params)->all();
        
        $res = [];
        
        foreach( $articles  as  $article ) {
            $res[] = [
                'name' => $article->name,
                'href' => $article->href,
                'list' => StructureMap::extract($article->id)
            ];
        }
        
        return $res;
    }
    
    public static function breadcrumbs($href) {
        
        function xx($label) {
            return $label == 'TOP' ? "" : $label;
        }
        
        $article = Tree_node::find()->where(['href' => $href])->one();
        $res = [ 
            ['label' => xx($article->name), 'url' => $article->href] 
        ];
        while($article->parent_id!=NULL) {
            $article = Tree_node::find()->where(['id' => $article->parent_id])->one();
            $res[] = ['label' => xx($article->name), 'url' => $article->href];
        }
        
        return $res;
    }
}
