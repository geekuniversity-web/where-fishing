<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
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
 * @property integer $camp
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
            [['rating', 'price_entry', 'price_rowing_boat', 'price_motor_boat', 'price_rod', 'price_gear', 'region_id', 'camp'], 'number'],
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
            'camp' => 'Camp'
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

    public function getRegionName()
    {
        $name = $this->getRegion()->asArray()->all();

        return $name[0]['title'];
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

    private function getFishesArray()
    {
        return $this->getFishes()->asArray()->all();
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

    // Методы работы со снастями
    public function getGears()
    {
        return $this->hasMany(Gear::className(), ['id' => 'gear_id'])
            ->viaTable('place_gear', ['place_id' => 'id']);
    }

    private function getGearsArray()
    {
        return $this->getGears()->asArray()->all();
    }

    public function getSelectedGears()
    {
        $selectedIds = $this->getGears()->select('id')->asArray()->all();
        return ArrayHelper::getColumn($selectedIds, 'id');
    }

    public function saveGears($gears)
    {
        if (is_array($gears))
        {
            $this->clearCurrentGears();
            foreach($gears as $gear_id)
            {
                $gear = Gear::findOne($gear_id);
                $this->link('gears', $gear);
            }
        }
    }

    public function clearCurrentGears()
    {
        PlaceGear::deleteAll(['place_id'=>$this->id]);
    }

    public static function getAll($pageSize = 5)
    {
        $query = Place::find();
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>$pageSize]);
        $places = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['places'] = $places;
        $data['pagination'] = $pagination;

        return $data;
    }

    public function getAllFishes()
    {
        $fishes = $this->getFishesArray();

        foreach ($fishes as $fish) {
            $data[] = Fish::findOne($fish['id']);
        }

        return $data;
    }

    public function getAllGears()
    {
        $gears = $this->getGearsArray();

        foreach ($gears as $gear) {
            $data[] = Gear::findOne($gear['id']);
        }

        return $data;
    }
}
