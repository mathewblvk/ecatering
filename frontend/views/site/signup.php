<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model SignupForm */

use frontend\models\SignupForm;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use common\models\Branch;
use common\models\Role;
use common\models\Department;
use yii\helpers\ArrayHelper;

$branches = Branch::find()->all();
$branchList = ArrayHelper::map($branches,'id','branch_name');

$roles = Role::find()->all();
$roleList = ArrayHelper::map($roles,'id','role_name');

$department = Department::find()->all();
$departmentList = ArrayHelper::map($department,'id','department_name');

$this->title = 'Customer Registration';
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
            Please fill up the following fields to create an account. Thank you.
        </h5>
        <div class="card">
            <div class="card-body shadow-lg">
                <div class="row">
                        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($model, 'first_name')->textInput(['autofocus' => true]) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'last_name')->textInput(['autofocus' => true]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'email') ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($model, 'address')->textInput(['autofocus' => true]) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'phone_number')->textInput(['autofocus' => true]) ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($model, 'city')->textInput(['autofocus' => true]) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'country')->textInput(['autofocus' => true]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <?= $form->field($model, 'role_id')->dropDownList($roleList, ['prompt' => '--Select Role--']) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field($model, 'password')->passwordInput() ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?= Html::submitButton('Signup', ['class' => 'btn btn-block btn-primary', 'name' => 'signup-button']) ?>
                        </div>
                        <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>

