<?php

namespace app\controllers;

use app\models\Country;
use app\models\ImageModel;
use app\models\Photos;
use app\models\Posts;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
                    //'logout' => ['post'],
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
        //$photo = Photos::find()->all();
        $p = new ImageModel();
        $photo = $p->find()
            ->select(['isMain', 'filePath'])
            ->where(['isMain' =>! null])
            ->asArray()
            ->all();
        $posts = new Posts();
        $q = $posts->find()->asArray()->all();
        for($i=0;$i<count($q);$i++)
        {
            $short_text = $posts->cut($q[$i]['text'], 200);
            $q[$i]['short_text']=$short_text;
            if($q[$i]['id']===$photo[$i]['isMain'])
                $q[$i]['imagePath'] = $photo[$i]['filePath'];
        }

        $model = new Country();
        $e = $model::find()
            ->select(['Name as value', 'Name as label', 'id'])
            ->asArray()
            ->all();
        return $this->render('index', ['q' => $q,'e'=> $e,'model' =>$model, 'photo' =>$photo]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goHome();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
