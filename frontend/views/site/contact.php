<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container text-center">
    <hr style="width: 400px; background-color: green; height: 6px">
    <h1 class="text-warning" style="font-family: 'Century Schoolbook'"><?= Html::encode($this->title) ?></h1>
    <i class="fas fa-carrot text-warning" style="font-size: 40px"></i>
    <hr style="width: 700px; background-color: green; height: 6px">
</div>
<div class="container">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <h5 class="text-muted pb-3" style="font-family: 'Century Schoolbook'; font-style: italic">
            If you have business inquiries or other questions, please fill out the following form to contact us at e-catering. Thank you.
        </h5>
        <div class="card">
            <div class="card-body shadow-lg">
                <div class="col-lg-12">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form' ,
                        'layout' => 'horizontal',
                        'class' => 'form-horizontal']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 3]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>


