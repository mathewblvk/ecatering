<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use common\models\Product;

$products = Product::find()->all();

/* @var $this yii\web\View */
/* @var $model common\models\Order */
/* @var $form yii\bootstrap4\ActiveForm */
?>
<div class="branch-index">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row ml-1">
                        <a href="" class="btn btn-success mr-2"> <i class="fas fa-home"></i> </a>
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                </div>
                <div class="col-sm-8 float-right text-right">
                    <?=   Html::a('<i class="fas fa-arrow-circle-left"></i>',['site/index'], ['class' => 'btn btn-success']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-body login-card-body">
                    <?php $form = ActiveForm::begin([
                            'layout' => 'horizontal',
                            'class' => 'form-horizontal',]); ?>
                    <?= $form->field($model, 'user_id')->textInput() ?>

                    <?= $form->field($model, 'delivery_note')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'delivery_time')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'delivery_day')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'created_at')->textInput() ?>

                    <?= $form->field($model, 'updated_at')->textInput() ?>

                    <?= $form->field($model, 'branch_id')->textInput() ?>

                    <?= $form->field($model, 'transaction_id')->textInput() ?>

                    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'shipping_method')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'shipping_amount')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'grand_amount')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'currency_type')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>


