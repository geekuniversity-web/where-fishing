<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "place_fish".
 *
 * @property integer $id
 * @property integer $place_id
 * @property integer $fish_id
 *
 * @property Place $place
 * @property Fish $fish
 */
class PlaceFish extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'place_fish';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place_id', 'fish_id'], 'integer'],
            [['place_id'], 'exist', 'skipOnError' => true, 'targetClass' => Place::className(), 'targetAttribute' => ['place_id' => 'id']],
            [['fish_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fish::className(), 'targetAttribute' => ['fish_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'place_id' => 'Place ID',
            'fish_id' => 'Fish ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlace()
    {
        return $this->hasOne(Place::className(), ['id' => 'place_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFish()
    {
        return $this->hasOne(Fish::className(), ['id' => 'fish_id']);
    }
}
