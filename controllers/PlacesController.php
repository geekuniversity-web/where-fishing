<?php
namespace app\controllers;


use app\models\Places;
use yii\web\Controller;



class PlacesController extends Controller
{

    public function actionIndex()
    {
        $model = Places::find()->all();
        return $this->render('index',
            [
                'model' => $model
            ]);
    }
}