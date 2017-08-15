<?php

namespace app\models;

use mdm\admin\models\form\Login;
use Yii;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends Login
{

    public function login()
    {
        if ($this->validate()) {
            Yii::$app->getUser()->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
            return Yii::$app->request->referrer;
        } else {
            return false;
        }
    }
}
