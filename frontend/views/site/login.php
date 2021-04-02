<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login Page';
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
            Please fill out the following fields to login, Thank you..
        </h5>
        <div class="card">
            <div class="card-body shadow-lg">
                <div class="row">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div style="color:#999;margin:1em 0">
                        If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                        <br>
                        Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-block btn-primary', 'name' => 'login-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>
