<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gear`.
 */
class m170810_095138_create_gear_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('gear', [
            'id' => $this->primaryKey(),
            'title' => $this->string()
        ], "ENGINE=InnoDB CHARSET=utf8");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('gear');
    }
}
