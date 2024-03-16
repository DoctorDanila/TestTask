<?php

namespace app\modules\v1\models\system;

use Yii;

/**
 * This is the model class for table "{{%_systemErrors}}".
 *
 * @property int $id
 * @property int $code
 * @property string $description
 * @property string|null $possible
 * @property string $color
 */
class SystemErrors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%_systemErrors}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'description', 'color'], 'required'],
            [['code'], 'integer'],
            [['description', 'possible'], 'string', 'max' => 2048],
            [['color'], 'string', 'max' => 9],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'description' => 'Description',
            'possible' => 'Possible',
            'color' => 'Color',
        ];
    }

    public function getCode() {
        return $this->code;
    }
    public function getDescription() {
        return isset($this->description) && $this->description !==Null ? $this->description : Null;
    }
    public function getPossible() {
        return isset($this->possible) && $this->possible !==Null ? $this->possible : Null;
    }
    public function getColor() {
        return $this->color;
    }
}
