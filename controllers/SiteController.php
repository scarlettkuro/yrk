<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Tree_node;
use app\models\StructureMap;
use yii\helpers\Url;

class SiteController extends Controller
{
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex($href = "home")
    {
       
        $node = Tree_node::find()->where(['href' => $href])->one();
        
        $params = [];
        
        $params['nav'] = StructureMap::extract(243);
        
        $params['breadcrumbs'] = StructureMap::breadcrumbs($href);
        
        $params['title'] = $node->title;
        
        function suckit($matches) {
            return $text;
            var_dump($text);
            $text = substr($text, 1, strlen($text)-2);
            return strlen($text);
            $parts = explode('|', $text);
            return $parts[0] . " BUT " . $parts[1];
        }
        $regexp = "/\[(.*?)\|(.*?)\]/i";
        $params['text'] = preg_replace_callback($regexp,
        function ($matches) {
            return'<a href="' . Url::toRoute(['site/index', 'href' => $matches[1]]) . '">' .
                    $matches[2] . '</a>';
        },
        $node->text);
        
        return $this->render('index', $params);
    }
}
