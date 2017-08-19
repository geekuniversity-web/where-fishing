<?php

namespace app\controllers;

use app\models\Article;
use app\models\Comments;
use app\models\Fish;
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

class ArticleController extends ControllerWithAuth
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
        $data = Article::getAll();

        return $this->render('index', [
            'articles' => $data['articles'],
            'pagination' => $data['pagination']
        ]);
    }

    public function actionView($id)
    {
        $article = Article::findOne($id);

        //Вот это почему-то не работает О_о кому интересно можете попробовать разобраться
        //$comments = Comments::find()->where(['article_id' => $id])->leftJoin('user', 'comments.user_id = user.id')->orderBy(['date'=>SORT_DESC])->asArray()->all();
        $query = new Query();
        $query->from('comments')
            ->leftJoin('user', 'comments.user_id = user.id')
            ->orderBy(['date'=>SORT_DESC]);

        $command = $query->createCommand();
        $comments = $command->queryAll();

        $article->viewedCounter();

        return $this->render('view', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
}
