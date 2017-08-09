<?php

use yii\db\Migration;

class m170809_183030_update_users_email extends Migration
{
    public function safeUp()
    {
        $this->renameColumn('user', 'e-mail', 'email');
    }

    public function safeDown()
    {
        $this->renameColumn('user', 'email', 'e-mail');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170809_183030_update_users_email cannot be reverted.\n";

        return false;
    }
    */
}
