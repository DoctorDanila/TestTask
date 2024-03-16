<?php

namespace app\modules\v1\controllers;

use app\components\controllers\BaseAPIController;
use app\modules\v1\models\Users;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;

class UserController extends BaseAPIController
{
    public $modelClass = \app\modules\v1\models\Users::class;



}