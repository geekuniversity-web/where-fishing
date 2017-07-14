<?php

use yii\db\Migration;

class m170714_144434_create_places extends Migration
{
    public function safeUp()
    {
        $this->createTable('places',
            [
                'places_id' => $this->integer()->,
                'places_header' => $this->string()
            ]);
    }

    public function safeDown()
    {
        echo "m170714_144434_create_places cannot be reverted.\n";

        return false;
    }

}
