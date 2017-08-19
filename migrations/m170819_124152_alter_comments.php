<?php

use yii\db\Migration;

class m170819_124152_alter_comments extends Migration
{
    public function safeUp()
    {
        $this->addColumn('comments', 'type', $this->integer());
    }

    public function safeDown()
    {
        $this->dropColumn('comments', 'type');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170819_124152_alter_comments cannot be reverted.\n";

        return false;
    }
    */
}
