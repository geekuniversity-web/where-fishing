<?php

namespace app\controllers;

use app\models\Article;
use app\models\Fish;
use app\models\FreePlace;
use app\models\Place;
use mdm\admin\models\form\Login;
use mdm\admin\models\form\Signup;
use Yii;
use yii\db\Query;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class PlaceController extends ControllerWithAuth
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
        $free = FreePlace::getAll();

        return $this->render('index', [
            'places' => $data['places'],
            'pagination' => $data['pagination'],
            'places_free' => $free['places'] // Сейчас мы бесплатные и платные просто собираем в кучу, причём платные сверху
        ]);
    }

    public function actionView($id)
    {
        $place = Place::findOne($id);
        $fishes = $place->getAllFishes();
        $gears = $place->getAllGears();
        $popular_articles = Article::getPopular();

        $query = new Query();
        $query->from('comments')
            ->where(['type' => '2', 'article_id' => $id])
            ->leftJoin('user', 'comments.user_id = user.id')
            ->orderBy(['date'=>SORT_DESC]);

        $command = $query->createCommand();
        $comments = $command->queryAll();

        return $this->render('view', [
            'place' => $place,
            'fishes' => $fishes,
            'gears' => $gears,
            'popular_articles' => $popular_articles,
            'comments' => $comments
        ]);
    }

    public function actionFree($id)
    {
        $place = FreePlace::findOne($id);
        $fishes = $place->getAllFishes();
        $gears = $place->getAllGears();
        $popular_articles = Article::getPopular();

        $query = new Query();
        $query->from('comments')
            ->where(['type' => '3', 'article_id' => $id]) // 3 - бесплатные места, 2 - платные, 1 - статьи
            ->leftJoin('user', 'comments.user_id = user.id')
            ->orderBy(['date'=>SORT_DESC]);

        $command = $query->createCommand();
        $comments = $command->queryAll();

        return $this->render('free', [
            'place' => $place,
            'fishes' => $fishes,
            'gears' => $gears,
            'popular_articles' => $popular_articles,
            'comments' => $comments
        ]);
    }
}
