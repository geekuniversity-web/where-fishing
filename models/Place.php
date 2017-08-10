<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

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
 * @property integer $region_id
 */
class Place extends ActiveRecord
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
            [['rating', 'price_entry', 'price_rowing_boat', 'price_motor_boat', 'price_rod', 'price_gear', 'region_id'], 'number'],
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
            'region_id' => 'Region ID',
        ];
    }

    // Методы работы с картинкой
    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }

    public function getImage()
    {
        return ($this->image) ? '/images/uploads/' . $this->image : '/images/no-image.png';
    }

    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete();
    }

    // Методы работы с регионом
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }

    public function saveRegion($region_id)
    {
        $region = Region::findOne($region_id);
        if($region != null)
        {
            $this->link('region', $region);
            return true;
        }
    }

    // Методы работы с рыбой
    public function getFishes()
    {
        return $this->hasMany(Fish::className(), ['id' => 'fish_id'])
            ->viaTable('place_fish', ['place_id' => 'id']);
    }

    public function getSelectedFishes()
    {
        $selectedIds = $this->getFishes()->select('id')->asArray()->all();
        return ArrayHelper::getColumn($selectedIds, 'id');
    }

    public function saveFishes($fishes)
    {
        if (is_array($fishes))
        {
            $this->clearCurrentFishes();
            foreach($fishes as $fish_id)
            {
                $fish = Fish::findOne($fish_id);
                $this->link('fishes', $fish);
            }
        }
    }

    public function clearCurrentFishes()
    {
        PlaceFish::deleteAll(['place_id'=>$this->id]);
    }
}
