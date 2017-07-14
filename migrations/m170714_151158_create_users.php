<?php

use yii\db\Migration;

class m170714_151158_create_users extends Migration
{
    public function safeUp()
    {
        $this->createTable('user',
            [
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
                'e-mail' => $this->string()
            ]);
    }

    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170714_151158_create_users cannot be reverted.\n";

        return false;
    }
    */
}
