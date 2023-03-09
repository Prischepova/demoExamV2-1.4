<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Где нас найти?';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <div>
        <img src="/img/map.jpg" class="img-fluid" alt="...">
    </div>

    <h4>Адрес: Курилова, д.28, п.5</h4>
    <h4>Номер телефона: 8 (929) 444-44-44</h4>
    <h4>Email: muaichouae@m.com</h4>

</div>
