<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of Article
 *
 * @author kuro
 */
class Tree_node extends ActiveRecord {
    
    /*
     * ActiveRecord 
     * put there it's methods
     * and fields
    */
    
    //custom
    
    public static function treeStructure($id = NULL) {
        
        //set root id
        if ($id == NULL)
            $id = Tree_node::find()->where(['name' => 'TOP'])->one()->id;
        
        $query = Tree_node::find()->where(['parent_id' => $id, 'hidden' => 0]);
                
        if (!$query->exists()) 
            return [];
        
        
        $nodes = $query->all();
                
        $tree = [];
        
        foreach( $nodes  as  $node ) {
            $tree[] = [
                'name' => $node->name,
                'href' => $node->href,
                'position' => $node->position,
                'list' => Tree_node::treeStructure($node->id)
            ];
        }
        
        //sort
        
        $comparator = function($_a, $_b) {
            $a = $_a['position'];
            $b = $_b['position'];
            
            if ($a == $b) return 0;
            return ($a < $b) ? -1 : 1;
        };
        
        usort($tree,$comparator);
        
        return $tree;
    }
    
    public static function breadcrumbs($href) {
        
        //if ($href == "home") return [];
        
        $TOPfilter = function ($label) {
            return $label == 'TOP' ? "" : $label;
        };
        
        $node = Tree_node::find()->where(['href' => $href])->one();
        
        $breadcrumbs = [ 
            ['label' => $TOPfilter($node->name), 'url' => $node->href] 
        ];
        
        while($node->parent_id != NULL) {
            $node = Tree_node::find()->where(['id' => $node->parent_id])->one();
            $breadcrumbs[] = ['label' => $TOPfilter($node->name), 'url' => $node->href];
        }
        
        return array_reverse($breadcrumbs);
    }
}
