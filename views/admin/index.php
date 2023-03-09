<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Административная панель';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Управление категориями', ['/category']) ?>
    </p>

    <p>
        <?= Html::a('Управление товарами', ['/products']) ?>
    </p>

    <p>
        <?= Html::a('Управление заказами', ['/order']) ?>
    </p>

</div>
