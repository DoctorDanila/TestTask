<?php

namespace app\components\controllers;

use yii\rest\ActiveController;

class BaseAPIController extends ActiveController
{

    public $serializer = [
        'class'=>'yii\rest\Serializer',
        'collectionEnvelope'=>'items',
    ];


}