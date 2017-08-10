<?php

namespace app\controllers;

use app\models\Fish;
use app\models\Place;
use mdm\admin\models\form\Login;
use mdm\admin\models\form\Signup;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class PlaceController extends Controller
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
                    'logout' => ['post'],
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
        $data = Place::getAll();

        return $this->render('index', [
            'places' => $data['places'],
            'pagination' => $data['pagination']
        ]);
    }

    public function actionView($id)
    {
        $place = Place::findOne($id);
        $fishes = $place->getAllFishes();
        $gears = $place->getAllGears();

        return $this->render('view', [
            'place' => $place,
            'fishes' => $fishes,
            'gears' => $gears,
        ]);
    }
}
