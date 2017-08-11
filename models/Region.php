<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "region".
 *
 * @property integer $id
 * @property string $title
 */
class Region extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
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
        ];
    }

    public function getPlaces()
    {
        return $this->hasMany(Place::className(), ['region_id' => 'id']);
    }

    public function getPlacesCount()
    {
        return $this->getPlaces()->count();
    }

    public static function getAll()
    {
        return Region::find()->all();
    }

    public static function getPlacesByRegion($id)
    {
        $query = Place::find()->where(['region_id'=>$id]);
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>6]);
        $places = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        $data['places'] = $places;
        $data['pagination'] = $pagination;

        return $data;
    }
}
