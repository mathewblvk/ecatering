<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Branch */
/* @var $form yii\bootstrap4\ActiveForm */
?>

      <div class="row">
        <div class="col-md-12">
            <div class="card card-info card-outline">
                <div class="card-body login-card-body">
                    <?php $form = ActiveForm::begin([
                        'layout' => 'horizontal',
                        'class' => 'form-horizontal',]); ?>

                    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'branch_name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'branch_address')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'branch_status')->textInput(['maxlength' => true]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>

<?php
$script = <<< JS


JS;
$this->registerJs($script);
?>

