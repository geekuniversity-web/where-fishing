<?php

use yii\db\Migration;

class m170822_103828_free_place extends Migration
{
    public function safeUp()
    {
        $this->createTable('free_place', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'image' => $this->string()->null(),
            'entrance' => $this->text(),
            'boot' => $this->text(),
            'rating' => $this->integer()
        ], "ENGINE=InnoDB CHARSET=utf8");
    }

    public function safeDown()
    {
        $this->dropTable('free_place');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170822_103828_free_place cannot be reverted.\n";

        return false;
    }
    */
}
