<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.07.2017
 * Time: 12:36
 */

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\Json;

/**
 * Class PlacesData
 * @package app\models
 * Active Record, эта модель будет получать данные из базы
 *
 * @property integer $places_id
 * @property string $places_header
 * @property string $places_bod
 * @property Json $places_tags
 * @property integer $places_rating
 * @property integer $places_type_id
 * @property integer $places_location_id
 * TODO: добавить rules для валидации входящих данных при добавлении из админки
 *
 */
class PlacesData extends ActiveRecord
{



    public static function tableName()
    {
        return '{{places}}';
    }
}