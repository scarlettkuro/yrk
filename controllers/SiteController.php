<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

use app\models\Tree_node;

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

    public function actionIndex()
    {
        
        $categories = Tree_node::find()
                ->where([
                    'parent_id' => 243,
                    'hidden' => 0
                ])
                ->all();
        $nav_headers = [];
        foreach($categories as $category) {
            //echo $category->id;
            $articles = Tree_node::find()
                    ->where(['parent_id' => $category->id])
                    ->all();
            $list = [];
            foreach($articles as $article)
                $list[] = $article->name;
            
            $nav_headers[$category->name] =  [
                'active' => false,
                'list' => $list
            ];
        }
        
        
        
        $node = $nodes[1];
        
        $params = [];
        
        $params['nav'] = $nav_headers;//parse_ini_file('menu.ini', true);
        
        $params['breadcrumbs'] = [ 
            ['label' => $n->title, 'url' => ['suka']] 
        ];
        
        $params['title'] = $node->title;
        
        $params['text'] = $node->text;//"Dawgs? Yeah, dawgs.";
        
        return $this->render('index', $params);
    }
}
