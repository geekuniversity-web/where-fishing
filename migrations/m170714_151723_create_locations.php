<?php

use yii\db\Migration;

class m170714_151723_create_locations extends Migration
{
    public function safeUp()
    {
        $this->createTable('locations', [
            'locations_id' => $this->primaryKey(),
            'locations_name' => $this->string(),
            'locations_area_id' => $this->integer()
        ]);
    }

    public function safeDown()
    {
       $this->dropTable('locations');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170714_151723_create_locations cannot be reverted.\n";

        return false;
    }
    */
}
