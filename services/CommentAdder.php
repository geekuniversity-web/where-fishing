<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.08.2017
 * Time: 11:07
 */

namespace app\services;


use app\models\Comments;
use Yii;

/**
 * Class CommentAdder
 * @package app\services
 * Вот это вот должно вызываться из всех мест, где нужно добавление комментариев
 */
class CommentAdder
{

    /**
     *  добавляет в модель Comments запись про user_id и date, всё остальное получаем из формы
     */
    public static function registerComment()
    {
        $model = new Comments();
        if(Yii::$app->request->post() && $model->load(Yii::$app->request->post()))
        {
            $model->user_id = Yii::$app->user->getId();
            $model->data = date('Y-m-d');
            if($model->validate())
            {
                $model->save();
                return "Комментарий успешно добавлен";
            } else {
                return print_r($model->getErrors());
            }
        }
    }
}