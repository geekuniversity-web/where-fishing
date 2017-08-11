<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170810_063631_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(),
            'password' => $this->string(256),
            'auth_key' => $this->string(),
            'accessToken' => $this->string(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'password_hash' => $this->string(256),
            'password_reset_token' => $this->string(),
            'email' => $this->string()
        ], "ENGINE=InnoDB CHARSET=utf8");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
