<?php

namespace app\controllers;

use app\models\Article;
use app\models\Fish;
use app\models\Gear;
use mdm\admin\models\form\Login;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends ControllerWithAuth
{
    /**
     * @inheritdoc
     */
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
                    'logout' => ['get']

                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $fishes = ArrayHelper::map(Fish::find()->all(), 'id', 'title');
        $gears = ArrayHelper::map(Gear::find()->all(), 'id', 'title');
        if(Yii::$app->request->isPost)
        {
            $fishes = Yii::$app->request->post('fishes');
            $gears = Yii::$app->request->post('gears');
            return $this->redirect(['index']);
        }

        $recent_articles =  Article::getRecent();

        return $this->render('index', [
            'fishes' => $fishes,
            'gears' => $gears,
            'recent_articles' => $recent_articles,
        ]);
    }


    public function actionSignup()
    {
        $model = new \app\models\Signup();
        if ($model->load(Yii::$app->getRequest()->post())) {
            if ($user = $model->signup()) {
                return $this->goHome();
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }
}
