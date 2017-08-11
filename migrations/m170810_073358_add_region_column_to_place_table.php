<?php

use yii\db\Migration;

/**
 * Handles adding region to table `place`.
 */
class m170810_073358_add_region_column_to_place_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
       $this->addColumn('place', 'region_id', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('place', 'region_id');
    }
}
