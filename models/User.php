<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $name;
    public $adress;
    public $telephone;
    public $accessToken;



    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return ($model = Users::findOne(['id' => $id])) ? new static ($model) : null;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return ($model = Users::findOne(['accessToken' => $token])) ? new static ($model) : null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return User
     */
    public static function findByUsername($username)
    {
        if ($res = Users::findOne(['username' => $username]))
        {
            return new static ($res);
        };
        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password; //TODO: сделать хэширование пароля
    }


}
