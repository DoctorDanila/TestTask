<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "{{%restate_rent_info}}".
 *
 * @property int $local_id
 * @property int|null $cityID
 * @property string|null $reqStatDate
 * @property int|null $reqStat
 * @property string|null $bdAddTime
 */
class RestateRentInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%restate_rent_info}}';
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
            [['cityID', 'reqStat'], 'integer'],
            [['reqStatDate'], 'string'],
            [['bdAddTime'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'local_id' => 'Local ID',
            'cityID' => 'City ID',
            'reqStatDate' => 'Req Stat Date',
            'reqStat' => 'Req Stat',
            'bdAddTime' => 'Bd Add Time',
        ];
    }
}
