<?php

use yii\db\Migration;

/**
 * Handles the creation of table `fish`.
 */
class m170810_083309_create_fish_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('fish', [
            'id' => $this->primaryKey(),
            'title' => $this->string()
        ], "ENGINE=InnoDB CHARSET=utf8");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('fish');
    }
}
