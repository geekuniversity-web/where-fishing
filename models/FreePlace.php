<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "free_place".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $entrance
 * @property string $boot
 * @property integer $rating
 */
class FreePlace extends Place
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'free_place';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'entrance', 'boot'], 'string'],
            [['rating'], 'integer'],
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
        ];
    }

    public static function getAll($pageSize = 5)
    {
        $query = FreePlace::find();
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>$pageSize]);
        $places = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['places'] = $places;
        $data['pagination'] = $pagination;

        return $data;
    }
}
