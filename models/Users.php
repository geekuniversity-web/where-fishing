<?php

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class Users
 * @package app\models
 * Active Record для получения данных из таблички user
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 */
class Users extends ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }
}