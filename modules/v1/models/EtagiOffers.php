<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "{{%etagi_offers}}".
 *
 * @property int $local_id
 * @property int|null $object_id
 * @property string|null $old_price
 * @property string|null $action_sl
 * @property int|null $city_id
 * @property string|null $class
 * @property int|null $floors
 * @property string|null $house_num
 * @property string|null $lat_long
 * @property string|null $location
 * @property float|null $price
 * @property float|null $price_m2
 * @property float|null $square
 * @property string|null $status
 * @property string|null $type
 * @property string|null $city
 * @property string|null $district
 * @property string|null $street
 * @property string|null $bdAddTime
 */
class EtagiOffers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%etagi_offers}}';
    }

    public function fields()
    {
        $fields = parent::fields();
        return $fields;
    }

    public function extraFields()
    {
        $extraFields = parent::extraFields();
        return $extraFields;
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['object_id', 'city_id', 'floors'], 'integer'],
            [['price', 'price_m2', 'square'], 'number'],
            [['bdAddTime'], 'safe'],
            [['old_price', 'action_sl', 'class', 'house_num', 'lat_long', 'location', 'status', 'type', 'city', 'district', 'street'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'local_id' => 'Local ID',
            'object_id' => 'Object ID',
            'old_price' => 'Old Price',
            'action_sl' => 'Action Sl',
            'city_id' => 'City ID',
            'class' => 'Class',
            'floors' => 'Floors',
            'house_num' => 'House Num',
            'lat_long' => 'Lat Long',
            'location' => 'Location',
            'price' => 'Price',
            'price_m2' => 'Price M2',
            'square' => 'Square',
            'status' => 'Status',
            'type' => 'Type',
            'city' => 'City',
            'district' => 'District',
            'street' => 'Street',
            'bdAddTime' => 'Bd Add Time',
        ];
    }
}
