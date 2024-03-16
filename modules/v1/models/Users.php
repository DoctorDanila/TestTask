<?php

namespace app\modules\v1\models;

use Yii;
use yii\filters\RateLimitInterface;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property int $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $access_token
 * @property string $auth_key
 * @property string|null $photo
 * @property string|null $status
 * @property int $created_at
 * @property int $updated_at
 */
class Users extends \yii\db\ActiveRecord implements IdentityInterface//, RateLimitInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%users}}';
    }

    /**
     * {@inheritdoc}
     */

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password_hash',], 'required'],
            [['password_reset_token', 'access_token', 'auth_key', 'created_at', 'updated_at'], 'safe'],
            [['created_at', 'updated_at'], 'integer'],
            [['username'], 'string', 'max' => 512],
            [['password_hash', 'password_reset_token', 'status'], 'string', 'max' => 255],
            [['access_token'], 'string', 'max' => 16],
            [['auth_key'], 'string', 'max' => 32],
            [['photo'], 'string', 'max' => 1024],
            [['password_reset_token'], 'unique'],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'access_token' => 'Access Token',
            'auth_key' => 'Auth Key',
            'photo' => 'Photo',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
