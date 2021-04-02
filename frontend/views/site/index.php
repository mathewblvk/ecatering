<?php

use aryelds\sweetalert\SweetAlert;
use common\models\Product;
use yii\bootstrap4\Html;

$products = Product::find()->all();

/* @var $this yii\web\View */
$this->title = 'Available Menu';
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
    <div class="container text-center">
        <hr style="width: 400px; background-color: green; height: 6px">
        <h1 class="text-warning" style="font-family: 'Century Schoolbook'"><?= Html::encode($this->title) ?></h1>
        <i class="fas fa-carrot text-warning" style="font-size: 40px"></i>
        <hr style="width: 700px; background-color: green; height: 6px">
        <div class="row pt-2">
            <?php foreach ($products as $product) {?>
            <div class="col-md-4">
                <div class="card"">
                <?php echo Html::img('@web/menu.png', [
                        'height' => '300px' ,
                        'width' => 'auto'
                ]) ?>
                <div class="card-body " style="font-family: 'Century Schoolbook'">
                       <h2><?php echo $product['product_name'] ?></h2>
                        <h4 class="card-text">Price: <?php echo $product['product_price'] ?></h4>
                        <p class="card-text">Menu Code: <?php echo $product['code'] ?></p>
                        <p class="card-text">Description: <?php echo $product['description'] ?></p>
                    <?php if(Yii::$app->user->isGuest){ ?>
                        <?= Html::a('<i class="fas fa-cart-arrow-down"></i> Login to make an order', ['site/index'], ['class' => 'btn btn-warning btn-disable']) ?>

                    <?php  } else {  ?>
                        <?= Html::a('<i class="fas fa-cart-arrow-down"></i> Place Your Order', ['site/order', 'id'=>Yii::$app->user->identity->id], ['class' => 'btn btn-warning btn-disable']) ?>
                    <?php }?>
                    </div>
                </div>
            </div>
         <?php } ?>
    </div>

