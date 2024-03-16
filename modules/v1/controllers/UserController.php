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




    public function actions(){
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }
    public function actionIndex(){
        $activeData = new ActiveDataProvider([
            'query' => Users::find(),
            'pagination' => [
                'defaultPageSize' => \Yii::$app->request->get('limit', 20),
                'pageSizeLimit' => [1, 500],
            ],
        ]);
        return $activeData;
    }
}