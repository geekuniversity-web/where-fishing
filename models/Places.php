<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "places".
 *
 * @property integer $places_id
 * @property string $places_header
 * @property resource $places_body
 * @property string $places_tags
 * @property integer $places_rating
 * @property integer $places_type_id
 * @property integer $places_location_id
 */
class Places extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'places';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['places_body'], 'string'],
            [['places_rating', 'places_type_id', 'places_location_id'], 'integer'],
            [['places_header'], 'string', 'max' => 45],
            [['places_tags'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'places_id' => 'Places ID',
            'places_header' => 'Places Header',
            'places_body' => 'Places Body',
            'places_tags' => 'Places Tags',
            'places_rating' => 'Places Rating',
            'places_type_id' => 'Places Type ID',
            'places_location_id' => 'Places Location ID',
        ];
    }
}
