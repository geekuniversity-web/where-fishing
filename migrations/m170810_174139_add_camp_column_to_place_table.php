<?php

use yii\db\Migration;

/**
 * Handles adding camp to table `place`.
 */
class m170810_174139_add_camp_column_to_place_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('place', 'camp', $this->boolean());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('place', 'camp');
    }
}
