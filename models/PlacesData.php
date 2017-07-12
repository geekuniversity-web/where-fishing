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
 * Class SpotsData
 * @package app\models
 * Active Record, эта модель будет получать данные из базы
 */
class PlacesData extends ActiveRecord
{
    /**
     * @var $places_id integer
     * ID статьи про место
     */
        public $places_id;

    /**
     * @var $places_header string
     * Содержит заголовок места
     */
        public $places_header;

    /**
     * @var $places_body string
     * Текст статьи
     */
        public $places_body;

    /**
     * @var $places_tags Json
     * будет JSON объект с тегами статьи TODO: не забыть что до конца не согласовали
     */
        public $places_tags;

    /**
     * @var $places_rating integer
     * рейтинг места, полагаю что от 0 до 5  TODO: вот тут уточнить позднее
     */
        public $places_rating;

    /**
     * @var $places_type_id integer
     * Тип записи, платная, обычная, еще какая
     */
        public $places_type_id;

    /** @var  $places_location integer
     * id расположения на карте
     */
        public $places_location_id;


    public static function tableName()
    {
        return '{{places}}';
    }
}