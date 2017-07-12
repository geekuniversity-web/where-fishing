<?php
namespace app\controllers;


use yii\web\Controller;

class SpotsController extends Controller
{


    public function actionIndex()
    {
        return $this->render('spots');
    }
}