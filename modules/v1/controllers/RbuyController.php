<?php

namespace app\modules\v1\controllers;

use app\components\controllers\BaseAPIController;
use yii\data\ActiveDataProvider;

class RbuyController extends BaseAPIController
{
    public $modelClass = \app\modules\v1\models\RestateBuyInfo::class;

}