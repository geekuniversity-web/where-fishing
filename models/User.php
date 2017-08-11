<?php

namespace app\models;

class User extends \mdm\admin\models\searchs\User
{
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }
}




