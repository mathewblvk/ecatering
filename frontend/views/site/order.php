<?php

use aryelds\sweetalert\SweetAlert;
use common\models\Branch;
use common\models\Product;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\ArrayHelper;

$products = Product::find()->all();
/* @var $model common\models\billingaddress */

$branches = Branch::find()->all();
$branchList = ArrayHelper::map($branches,'id','branch_name');


/* @var $this yii\web\View */
$this->title = 'Place your order';
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

<div class="container ">
    <hr style="width: 400px; background-color: green; height: 6px">
    <h1 class="text-warning text-center" style="font-family: 'Century Schoolbook'"><?= Html::encode($this->title) ?></h1>
    <div class="text-center">
        <i class="fas fa-carrot text-warning" style="font-size: 40px"></i>
    </div>
    <hr style="width: 700px; background-color: green; height: 6px">
    <div class="row pt-2">
        <div class="col-md-12">
            <div class="card shadow-lg" style="font-family: 'Century Schoolbook'">
                <div class="card-header">Product Order Form</div>
                <?php $form = ActiveForm::begin(); ?>
                <div class="card-body">
                    <div class="login-logo">
                        <?php echo Html::img('@web/ecatering1.png') ?>
                    </div>
                    <div class="text-center">
                        <p><b><?php echo Yii::$app->user->identity->branch->company_name .", ".Yii::$app->user->identity->branch->branch_name?></b></p>
                        <p><b><?php echo Yii::$app->user->identity->branch->branch_address ?></b></p>
                        <p><b><?php echo Yii::$app->user->identity->branch->phone_number ?></b></p>
                        <p><b><?php echo Yii::$app->user->identity->branch->email ?></b></p>
                    </div>

                    <hr style="height: 1px; background-color: #333">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li><h3><b>Customer Name: <?php echo Yii::$app->user->identity->first_name ." ". Yii::$app->user->identity->last_name ?></b></h3>
                                    <ul>
                                        <li><h5><i class="fas fa-phone"></i> <?php echo Yii::$app->user->identity->phone_number ?></h5></li>
                                        <li><h5><i class="fas fa-envelope"></i> <?php echo Yii::$app->user->identity->email ?></h5></li>
                                        <li><h5><i class="fas fa-address-card"></i> <?php echo Yii::$app->user->identity->address ?></h5></li>
                                        <li><h5><i class="fas fa-city"></i> <?php echo Yii::$app->user->identity->city ?></h5></li>
                                        <li><h5><i class="fas fa-id-badge"></i> <?php echo Yii::$app->user->identity->country ?></h5></li>
                                        <li><h5><i class="fas fa-laptop-house"></i> <?php echo Yii::$app->user->identity->branch->branch_name ?></h5></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'user_id')->textInput(['readonly'=>true]) ?>

                            <?= $form->field($model, 'order_id')->textInput(['readonly'=>true]) ?>

                            <?= $form->field($model, 'address_one')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'address_two')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'special_instructions')->textarea(['rows' => 3]) ?>
                        </div>
                    </div>
                    <hr style="height: 1px; background-color: #333">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Select more products</p>
                            <table id="example1" class="table">
                                        <thead>
                                        <tr>
                                            <th>Menu Name</th>
                                            <th>Code</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($products as $product) {?>
                                            <tr>
                                                <td><?php echo $product['product_name']?></td>
                                                <td><?php echo $product['code']?></td>
                                                <td><?php echo $product['product_price']?></td>
                                                <td><?php echo $product['description']?></td>
                                            </tr>
                                            <?php
                                        } ?>
                                        </tbody>
                                    </table>
                        </div>
                        <div class="col-md-6">
                             <p>Ordered Products</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                <?= Html::submitButton('Submit Your Order', ['class' => 'btn btn-success']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

</div>

