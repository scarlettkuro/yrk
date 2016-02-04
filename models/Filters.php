<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

/**
 * Description of FilterLocator
 *
 * @author kuro
 */
class Filters {
    
    public static function shortcodeUrls($text) {
        
        $filter = function ($matches) {
            $url = Url::toRoute(['site/index', 'href' => $matches[1]]);
            $text = $matches[2];
            return "<a href=\"$url\">$text</a>";
        };
        
        return preg_replace_callback("/\[(.*?)\|(.*?)\]/i", $filter, $text);
    }
    
    public static function imagesSrc($prefix, $suffix, $text) {
        
        $filter = function ($matches) {
            $src = $matches['2'];
            return $matches[1] . $prefix . $src . $suffix;
        };
        
        return preg_replace_callback("/(<img[^>]*src *= *[\"']?)([^\"']*)/i", $filter, $text);
    }
    
}
