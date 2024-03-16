<?php

namespace app\modules\v1\controllers;

use app\components\controllers\BaseAPIController;
use yii\data\ActiveDataProvider;

class RrentController extends BaseAPIController
{
    public $modelClass = \app\modules\v1\models\RestateRentInfo::class;

    public function actions(){
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }
    public function actionIndex(){
        $activeData = new ActiveDataProvider([
            'query' => \app\modules\v1\models\RestateRentInfo::find(),
            'pagination' => [
                'defaultPageSize' => \Yii::$app->request->get('limit', 20),
                'pageSizeLimit' => [1, 500],
            ],
        ]);
        return $activeData;
    }
}