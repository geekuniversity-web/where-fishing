<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "place_gear".
 *
 * @property integer $id
 * @property integer $place_id
 * @property integer $gear_id
 *
 * @property Gear $gear
 * @property Place $place
 */
class PlaceGear extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'place_gear';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place_id', 'gear_id'], 'integer'],
            [['gear_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gear::className(), 'targetAttribute' => ['gear_id' => 'id']],
            [['place_id'], 'exist', 'skipOnError' => true, 'targetClass' => Place::className(), 'targetAttribute' => ['place_id' => 'id']],
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
            'gear_id' => 'Gear ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGear()
    {
        return $this->hasOne(Gear::className(), ['id' => 'gear_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlace()
    {
        return $this->hasOne(Place::className(), ['id' => 'place_id']);
    }
}
