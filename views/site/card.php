<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'Корзина товара';
?>
<link rel="stylesheet" href="/css/site.css">

<div class="site-card">
    <h1><?= Html::encode($this->title) ?></h1>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Просмотр корзины
    </button>

        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Корзина</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
				    <tbody>
						<tr>
							<td><img src="/img/1.jpeg" alt=""></td>
							<td><a href="#">Скрипка</a></td>
							<td>5999 РУБ</td>
							<td>1</td>
						</tr>
						<tr>
							<td><img src="/img/2.jpeg" alt=""></td>
							<td><a href="#">Электрогитара</a></td>
							<td>8999 РУБ</td>
							<td>1</td>
						</tr>
						<tr>
							<td><img src="/img/3.jpeg" alt=""></td>
							<td><a href="#">Акустическая гитара</a></td>
							<td>6999 РУБ</td>
							<td>1</td>
						</tr>
					</tbody>
				</table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Оформить заказ</button>
            </div>
            </div>
        </div>
    </div>

</div>
