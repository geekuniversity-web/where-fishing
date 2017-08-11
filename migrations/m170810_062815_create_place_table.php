<?php

use yii\db\Migration;

/**
 * Handles the creation of table `place`.
 */
class m170810_062815_create_place_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('place', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'image' => $this->string()->null(),
            'entrance' => $this->text(),
            'boot' => $this->text(),
            'rating' => $this->integer(),
            'price_entry' => $this->integer()->null(),
            'price_rowing_boat' => $this->integer()->null(),
            'price_motor_boat' => $this->integer()->null(),
            'price_rod' => $this->integer()->null(),
            'price_gear' => $this->integer()->null(),
        ], "ENGINE=InnoDB CHARSET=utf8");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('place');
    }
}
