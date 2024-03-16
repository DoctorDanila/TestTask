<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "{{%domclick_offers}}".
 *
 * @property int $local_id
 * @property int|null $offer_id
 * @property string|null $offer_address
 * @property float|null $offer_price
 * @property float|null $offer_square_price
 * @property float|null $offer_area
 * @property string|null $offer_deal_type
 * @property string|null $offer_category
 * @property string|null $offer_location
 * @property string|null $offer_creation_date
 * @property string|null $updated_date
 * @property string|null $published_date
 * @property string|null $offer_description
 * @property int|null $is_domclick_offer
 * @property int|null $is_building
 * @property string|null $bdAddTime
 */
class DomclickOffers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%domclick_offers}}';
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
            [['offer_id', 'is_domclick_offer', 'is_building'], 'integer'],
            [['offer_price', 'offer_square_price', 'offer_area'], 'number'],
            [['offer_location', 'offer_description'], 'string'],
            [['offer_creation_date', 'updated_date', 'published_date', 'bdAddTime'], 'safe'],
            [['offer_address', 'offer_deal_type', 'offer_category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'local_id' => 'Local ID',
            'offer_id' => 'Offer ID',
            'offer_address' => 'Offer Address',
            'offer_price' => 'Offer Price',
            'offer_square_price' => 'Offer Square Price',
            'offer_area' => 'Offer Area',
            'offer_deal_type' => 'Offer Deal Type',
            'offer_category' => 'Offer Category',
            'offer_location' => 'Offer Location',
            'offer_creation_date' => 'Offer Creation Date',
            'updated_date' => 'Updated Date',
            'published_date' => 'Published Date',
            'offer_description' => 'Offer Description',
            'is_domclick_offer' => 'Is Domclick Offer',
            'is_building' => 'Is Building',
            'bdAddTime' => 'Bd Add Time',
        ];
    }
}
