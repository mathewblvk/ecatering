<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Billing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="billing-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'order_id')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'address_one')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_two')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'special_instructions')->textarea(['rows' => 3]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
