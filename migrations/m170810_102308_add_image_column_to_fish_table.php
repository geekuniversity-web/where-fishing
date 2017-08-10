<?php

use yii\db\Migration;

/**
 * Handles adding image to table `fish`.
 */
class m170810_102308_add_image_column_to_fish_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('fish', 'image', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('fish', 'image');
    }
}
