<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model SignupForm */

use backend\models\SignupForm;
use common\models\Branch;
use common\models\Role;
use common\models\Department;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$branches = Branch::find()->all();
$branchList = ArrayHelper::map($branches,'id','branch_name');

$roles = Role::find()->all();
$roleList = ArrayHelper::map($roles,'id','role_name');

$department = Department::find()->all();
$departmentList = ArrayHelper::map($department,'id','department_name');

$this->title = 'User Registration';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="branch-index">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row ml-1">
                        <?=   Html::a('<i class="fas fa-home"></i>',['site/index'], ['class' => 'btn btn-sm btn-info']); ?>
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                </div>
                <div class="col-sm-8 float-sm-right text-right">
                    <?=   Html::a('<i class="fas fa-arrow-circle-left"></i>',['site/index'], ['class' => 'btn btn-sm btn-info']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info card-outline">
                <div class="card-body ">
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
                            <?= $form->field($model, 'department_id')->dropDownList($departmentList, ['prompt' => '--Select Department--']) ?>
                        </div>
                        <div class="col-sm-6">
                            <?= $form->field($model, 'branch_id')->dropDownList($branchList, ['prompt' => '--Select Branch--']) ?>
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
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
