<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.07.2017
 * Time: 12:47
 */

namespace app\models;


class Signup extends \mdm\admin\models\form\Signup
{
    public $password_repeat;

    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => 'mdm\admin\models\User', 'message' => 'Увы, это имя уже занято.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'mdm\admin\models\User', 'message' => 'Этот e-mail уже используется.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'required'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Пароли не совпадают." ]
        ];
    }
}