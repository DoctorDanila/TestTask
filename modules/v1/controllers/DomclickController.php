<?php

namespace app\modules\v1\controllers;

use app\components\controllers\BaseAPIController;
use yii\data\ActiveDataProvider;

class DomclickController extends BaseAPIController
{
    public $modelClass = \app\modules\v1\models\DomclickOffers::class;

}