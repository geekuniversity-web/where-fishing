<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fish".
 *
 * @property integer $id
 * @property string $title
 *
 * @property PlaceFish[] $placeFish
 */
class Fish extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fish';
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlaceFish()
    {
        return $this->hasMany(PlaceFish::className(), ['fish_id' => 'id']);
    }
}
