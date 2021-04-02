<?php

use common\models\Branch;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Department */
/* @var $form yii\bootstrap4\ActiveForm */
$branches = Branch::find()->all();
$branchList = ArrayHelper::map($branches,'id','branch_name');
?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-info card-outline">
            <div class="card-body">
                <?php $form = ActiveForm::begin([
                    'layout' => 'horizontal',
                    'class' => 'form-horizontal',]); ?>

                <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'branch')->dropDownList($branchList, ['prompt' => '--Select Branch--']) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>

