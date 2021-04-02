<?php

/* @var $this yii\web\View */

$this->title = 'Dashboard';

use aryelds\sweetalert\SweetAlert;
use common\models\Branch;
use common\models\Product;
use common\models\User;
use yii\bootstrap4\Html;

$branchCount = count(Branch::find()->all());
$productCount = count(Product::find()->all());
$customerCount = count(User::find()->all());

foreach (Yii::$app->session->getAllFlashes() as $message) {
    echo SweetAlert::widget([
        'options' => [
            'title' => (!empty($message['title'])) ? Html::encode($message['title']) : 'Title Not Set!',
            'text' => (!empty($message['text'])) ? Html::encode($message['text']) : 'Text Not Set!',
            'type' => (!empty($message['type'])) ? $message['type'] : SweetAlert::TYPE_INFO,
            'timer' => (!empty($message['timer'])) ? $message['timer'] : 4000,
            'showConfirmButton' =>  (!empty($message['showConfirmButton'])) ? $message['showConfirmButton'] : true
        ]
    ]);
}
?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="fas fa-coins"></i>
                </div>
                <a href="#" class="small-box-footer">See More..<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h1> <?= $customerCount ?> </h1>
                    <p>Customers</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-tie"></i>
                </div>
                <a href="#" class="small-box-footer">See More..<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h1> <?= $productCount ?> </h1>
                    <p>Products</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <a href="#" class="small-box-footer">See More..<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h1> <?= $branchCount ?> </h1>
                    <p>Our Branches</p>
                </div>
                <div class="icon">
                    <i class="fas fa-laptop-house"></i>
                </div>
                <a href="#" class="small-box-footer">See More..<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-hamburger" style="font-size: 50px"></i>
                    <p style="font-size: 20px" class="mt-3">Menu List</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-users" style="font-size: 50px"></i>
                    <p style="font-size: 20px" class="mt-3">Group(Events)</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-gifts" style="font-size: 50px"></i>
                    <p style="font-size: 20px" class="mt-3">Packages</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-thumbs-up" style="font-size: 50px"></i>
                    <p style="font-size: 20px" class="mt-3">Bookings</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-tags" style="font-size: 50px"></i>
                    <p style="font-size: 20px" class="mt-3">On Discount</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-truck" style="font-size: 50px"></i>
                    <p style="font-size: 20px" class="mt-3">Delivery</p>
                </div>
            </div>
        </div>

    </div>


