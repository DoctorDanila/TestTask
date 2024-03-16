<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use app\modules\v1\models\system\SystemColors;
use app\modules\v1\models\system\SystemErrors;
use yii\helpers\Html;

$this->title = $name;
$bg = "#4f0088";

if ($exception instanceof \yii\web\BadRequestHttpException) {
    $bg = SystemErrors::findOne(['code' => 400])->getColor();
    $message = empty($message) ? SystemErrors::findOne(['code'=>400])->getDescription() : $message;
    $possible = SystemErrors::findOne(['code'=>400])->getPossible();
}
if ($exception instanceof \yii\web\UnauthorizedHttpException) {
    $bg = SystemErrors::findOne(['code' => 401])->getColor();
    $message = empty($message) ? SystemErrors::findOne(['code'=>401])->getDescription() : $message;
    $possible = SystemErrors::findOne(['code'=>401])->getPossible();
}
if ($exception instanceof \yii\web\ForbiddenHttpException) {
    $bg = SystemErrors::findOne(['code' => 403])->getColor();
    $message = empty($message) ? SystemErrors::findOne(['code'=>403])->getDescription() : $message;
    $possible = SystemErrors::findOne(['code'=>403])->getPossible();
}
if ($exception instanceof \yii\web\NotFoundHttpException) {
    $bg = SystemErrors::findOne(['code' => 404])->getColor();
    $message = empty($message) ? SystemErrors::findOne(['code'=>404])->getDescription() : $message;
    $possible = SystemErrors::findOne(['code'=>404])->getPossible();
}
if ($exception instanceof \yii\web\MethodNotAllowedHttpException) {
    $bg = SystemErrors::findOne(['code' => 405])->getColor();
    $message = empty($message) ? SystemErrors::findOne(['code'=>405])->getDescription() : $message;
    $possible = SystemErrors::findOne(['code'=>405])->getPossible();
}
if ($exception instanceof \yii\web\TooManyRequestsHttpException) {
    $bg = SystemErrors::findOne(['code' => 429])->getColor();
    $message = empty($message) ? SystemErrors::findOne(['code'=>429])->getDescription() : $message;
    $possible = SystemErrors::findOne(['code'=>429])->getPossible();
}
if ($exception instanceof \yii\web\ServerErrorHttpException) {
    $bg = SystemErrors::findOne(['code' => 500])->getColor();
    $message = empty($message) ? SystemErrors::findOne(['code'=>500])->getDescription() : $message;
    $possible = SystemErrors::findOne(['code'=>500])->getPossible();
}

?>
<style>
    @import url("https://fonts.googleapis.com/css?family=Share+Tech+Mono|Montserrat:700");
    * {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        box-sizing: border-box;
        color: inherit;
        user-select: none;
    }
    body {
        background-image: linear-gradient(120deg, <?=$bg?> 0%, #000000 100%);
        height: 100vh;
    }
    h1 {
        font-size: 45vw;
        text-align: center;
        position: fixed;
        width: 100vw;
        z-index: 1;
        color: #ffffff26;
        text-shadow: 0 0 50px rgba(0, 0, 0, 0.07);
        top: 50%;
        transform: translateY(-50%);
        font-family: "Montserrat", monospace;
    }
    div {
        background: rgba(0, 0, 0, 0);
        width: 70vw;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        margin: 0 auto;
        padding: 30px 30px 10px;
        box-shadow: 0 0 150px -20px rgba(0, 0, 0, 0.5);
        z-index: 3;
        border-radius: 25px;
    }
    P {
        font-family: "Share Tech Mono", monospace;
        color: #f5f5f5;
        margin: 0 0 20px;
        font-size: 17px;
        line-height: 1.2;
    }
    span {
        color: #f0c674;
    }
    i {
        color: #00f3a7;
    }
    div a {
        text-decoration: none;
    }
    b {
        color: #003089;
    }
    @keyframes slide {
        from {
            right: -100px;
            transform: rotate(360deg);
            opacity: 0;
        }
        to {
            right: 15px;
            transform: rotate(0deg);
            opacity: 1;
        }
    }
</style>
<h1><?php echo $exception->getCode() == 0 ? '<♥_' : $exception->getCode(); ?></h1>
<div><p>> <span>ERROR CODE</span>: "<i><?= Html::encode($this->title) ?></i>"</p>
    <p>> <span>ERROR DESCRIPTION</span>: "<i><?= Html::encode($message) ?></i>"</p>
    <?= $possible !==Null ? "<p>> <span>ERROR POSSIBLY CAUSED BY</span>: [<b>".Html::encode($possible)."</b>...]</p>" : "" ?>
    <p>> <span>IF YOU THINK THATS A SERVER ERROR</span>: [<b> Please contact us</b>...]</p>
    <p>> <span>GOOD LUCK SWEET +_-</span></p>
</div>
<script>
    var str = document.getElementsByTagName('div')[0].innerHTML.toString();
    var i = 0;
    document.getElementsByTagName('div')[0].innerHTML = "";

    setTimeout(function() {
        var se = setInterval(function() {
            i++;
            document.getElementsByTagName('div')[0].innerHTML = str.slice(0, i) + "|";
            if (i == str.length) {
                clearInterval(se);
                document.getElementsByTagName('div')[0].innerHTML = str;
            }
        }, 10);
    },0);
</script>
