<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "place".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $entrance
 * @property string $boot
 * @property integer $rating
 * @property integer $price_entry
 * @property integer $price_rowing_boat
 * @property integer $price_motor_boat
 * @property integer $price_rod
 * @property integer $price_gear
 */
class Place extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'place';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'entrance', 'boot'], 'string'],
            [['rating', 'price_entry', 'price_rowing_boat', 'price_motor_boat', 'price_rod', 'price_gear'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'entrance' => 'Entrance',
            'boot' => 'Boot',
            'rating' => 'Rating',
            'price_entry' => 'Price Entry',
            'price_rowing_boat' => 'Price Rowing Boat',
            'price_motor_boat' => 'Price Motor Boat',
            'price_rod' => 'Price Rod',
            'price_gear' => 'Price Gear',
        ];
    }
}
