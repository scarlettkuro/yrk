<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\helpers\Url;
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
        
        return preg_replace("/(<img[^>]*src *= *[\"']?)([^\"']*)/i", "$1 $prefix$2$suffix", $text);
    }
    
}
