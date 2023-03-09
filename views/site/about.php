<?php

use app\models\Category;
use app\models\Products;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProductsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
/** @var app\models\CategorySearch $searchModel */

$this->title = 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="/css/site.css">

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="dropdown-center">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Категории
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Струнные</a></li>
            <li><a class="dropdown-item" href="#">Клавишные</a></li>
            <li><a class="dropdown-item" href="#">Смычковые</a></li>
        </ul>
    </div>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            //'id',
            //'idCategory',
            'title',
            //'slug:ntext',
            'content',
            'img:ntext',
            'price',
        ],
    ]); ?>

    <!-- <section class="products">
        <div class="container">
            <div class="row">
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="card">
                            <img src="/img/1.jpeg" class="card-img-top" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->title ?></h5>
                                <p class="card-text"><?= $product->content ?></p>
                                <p class="price text-danger"><?= $product->price ?></p>
                                <a href="#" class="btn btn-primary buy" data-price="100" data-product="Товар один">Купить</a>
                            </div>
                        </div>     
                    </div>
                    <?php endforeach; ?>
                    <?php else :?>
                    <h2>Здесь нет товаров</h2>
                <?php endif; ?>  
            </div>
        </div>
    </section> -->

    <!-- <div class="row">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
    </div>/row -->

<!-- Modal -->
<!-- <div class="modal fade cart-modal" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Корзина</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="product.html"><img src="img/1.jpg" alt="CORT AD810M Акустическая гитара"></a></td>
                        <td><a href="product.html">CORT AD810M Акустическая гитара</a></td>
                        <td>2 799</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><a href="product.html"><img src="img/2.jpg" alt="Crafter D6/N Акустическая гитара"></a></td>
                        <td><a href="product.html">Crafter D6/N Акустическая гитара</a></td>
                        <td>12 626</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td colspan="4" align="right">Товаров: 3 <br> Сумма: 28 051 грн.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Оформить заказ</button>
            </div>
        </div>
    </div>
</div> -->

</div>
