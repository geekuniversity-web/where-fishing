<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.08.2017
 * Time: 14:35
 */

namespace app\controllers;


use mdm\admin\models\form\Login;
use yii\web\Controller;
use yii;
use yii\web\Response;

class ControllerWithAuth extends Controller
{
    public $loginModel;
    /**
     * Login action.
     *
     * @return Response|string
     * TODO: вот здесь надо бы сделать через Ajax.
     */
    public function actionLogin()
    {
        if (!Yii::$app->getUser()->isGuest) {
            return $this->goBack();
        }

        $model = new Login();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->goBack();
        }
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->getSession()->destroy();

        return $this->goHome();
    }
}