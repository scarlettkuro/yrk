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
        
        $params['nav'] = StructureMap::extract(243);//parse_ini_file('menu.ini', true);
        
        $params['breadcrumbs'] = StructureMap::breadcrumbs($href);
        
        $params['title'] = $node->title;
        
        $params['text'] = $node->text;//"Dawgs? Yeah, dawgs.";
        
        return $this->render('index', $params);
    }
}
