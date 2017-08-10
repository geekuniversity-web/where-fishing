<?php

use yii\db\Migration;

/**
 * Handles the creation of table `place_fish`.
 */
class m170810_083548_create_place_fish_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('place_fish', [
            'id' => $this->primaryKey(),
            'place_id' => $this->integer(),
            'fish_id' => $this->integer()
        ], "ENGINE=InnoDB CHARSET=utf8");

        // creates index for column `place_id`
        $this->createIndex(
            'fish_place_place_id',
            'place_fish',
            'place_id'
        );
        // add foreign key for table `place`
        $this->addForeignKey(
            'fish_place_place_id',
            'place_fish',
            'place_id',
            'place',
            'id',
            'CASCADE'
        );
        // creates index for column `fish_id`
        $this->createIndex(
            'idx_fish_id',
            'place_fish',
            'fish_id'
        );
        // add foreign key for table `fish`
        $this->addForeignKey(
            'fk-fish_id',
            'place_fish',
            'fish_id',
            'fish',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('place_fish');
    }
}
