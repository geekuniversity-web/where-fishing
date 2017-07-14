<?php

namespace app\models;

class User extends \mdm\admin\models\searchs\User
{
    public $id;
    public $username;
    public $password;
    public $password_hash;
    public $accessToken;
    public $status;
    public $email;
    public $auth_key;
    public $created_at;
    public $updated_at;
    public $password_reset_token;

}
