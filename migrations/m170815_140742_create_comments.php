<?php

use yii\db\Migration;

class m170815_140742_create_comments extends Migration
{
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'content'=>$this->text(),
            'date'=>$this->date(),
            'user_id'=>$this->integer(),
            'article_id'=>$this->integer()
        ], "ENGINE=InnoDB CHARSET=utf8");
    }

    public function safeDown()
    {
        $this->dropTable('comments');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170815_140742_create_comments cannot be reverted.\n";

        return false;
    }
    */
}
