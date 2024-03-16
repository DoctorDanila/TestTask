<?php

namespace app\modules\v1;

use app\modules\v1\models\Users;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;

/**
 * v1 module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\v1\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::class,
            'authMethods' => [
                HttpBearerAuth::className(),
                [
                    'class' => QueryParamAuth::className(),
                    'tokenParam' => 'token',
                ],
                [
                    'class' => HttpBasicAuth::className(),
                    'auth' => function ($username, $password) {
                        if ($user = Users::find()->where(['username' => $username])->one() and $user->validatePassword($password)) {
                            return $user;
                        }
                        return null;
                    },
                ]
            ],
            'except'=> [
                'user/login',
                'user/create'
            ],
        ];
//        $behaviors['rateLimiter']['enableRateLimitHeaders'] = false;
        return $behaviors;
    }
}