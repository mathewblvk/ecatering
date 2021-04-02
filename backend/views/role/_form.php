<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Role */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="role-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'class' => 'form-horizontal',]); ?>

    <?= $form->field($model, 'role_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
