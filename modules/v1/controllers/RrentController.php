<?php

namespace app\modules\v1\controllers;

use app\components\controllers\BaseAPIController;
use yii\data\ActiveDataProvider;

class RrentController extends BaseAPIController
{
    public $modelClass = \app\modules\v1\models\RestateRentInfo::class;

}