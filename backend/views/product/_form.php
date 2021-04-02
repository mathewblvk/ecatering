<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use common\models\Branch;
use common\models\Status;
use common\models\ProductCategory;

/* @var $this yii\web\View */
/* @var $model common\models\Product */
/* @var $form yii\bootstrap4\ActiveForm */
$branches = Branch::find()->all();
$branchList = ArrayHelper::map($branches,'id','branch_name');

$statuses = Status::find()->all();
$StatusList = ArrayHelper::map($statuses,'id','status_name');

$categories = ProductCategory::find()->all();
$CategoryList = ArrayHelper::map($categories,'id','category_name');

?>

<div class="product-form">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info card-outline">
                <div class="card-body login-card-body">
                    <?php $form = ActiveForm::begin([
                        'layout' => 'horizontal',
                        'class' => 'form-horizontal',]); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'product_price')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'branch_id')->dropDownList($branchList, ['prompt' => '--Select Branch--']) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'status_id')->dropDownList($StatusList, ['prompt' => '--Select Status--']) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'category_id')->dropDownList($CategoryList, ['prompt' => '--Select Category--']) ?>
                        </div>
                    </div>

                    <?= $form->field($model, 'description')->textInput(['rows' => '6']) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$script = <<< JS


JS;
$this->registerJs($script);
?>

