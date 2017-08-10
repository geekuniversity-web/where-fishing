<?php

use yii\db\Migration;

/**
 * Handles the creation of table `place_gear`.
 */
class m170810_095153_create_place_gear_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('place_gear', [
            'id' => $this->primaryKey(),
            'place_id' => $this->integer(),
            'gear_id' => $this->integer()
        ], "ENGINE=InnoDB CHARSET=utf8");

        // creates index for column `place_id`
        $this->createIndex(
            'gear_place_place_id',
            'place_gear',
            'place_id'
        );
        // add foreign key for table `place`
        $this->addForeignKey(
            'gear_place_place_id',
            'place_gear',
            'place_id',
            'place',
            'id',
            'CASCADE'
        );
        // creates index for column `gear_id`
        $this->createIndex(
            'idx_gear_id',
            'place_gear',
            'gear_id'
        );
        // add foreign key for table `gear`
        $this->addForeignKey(
            'fk-gear_id',
            'place_gear',
            'gear_id',
            'gear',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('place_gear');
    }
}
