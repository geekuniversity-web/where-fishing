<?php

use yii\db\Migration;
use yii\db\ColumnSchemaBuilder;

class m170714_144434_create_places extends Migration
{
    public function safeUp()
    {
        $this->createTable('places',
            [
                'places_id' => $this->primaryKey(),
                'places_header' => $this->string(),
                'places_body' => $this->text(),
                'places_tags' => $this->text(),
                'places_rating' => $this->integer(),
                'places_type_id' => $this->integer(),
                'places_location_id' => $this->integer()
            ]);
    }

    public function safeDown()
    {
        $this->dropTable('places');
    }

}
