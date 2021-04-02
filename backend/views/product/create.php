<?php

use aryelds\sweetalert\SweetAlert;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = 'Upload Product Image';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

foreach (Yii::$app->session->getAllFlashes() as $message) {
    echo SweetAlert::widget([
        'options' => [
            'title' => (!empty($message['title'])) ? Html::encode($message['title']) : 'Title Not Set!',
            'text' => (!empty($message['text'])) ? Html::encode($message['text']) : 'Text Not Set!',
            'type' => (!empty($message['type'])) ? $message['type'] : SweetAlert::TYPE_INFO,
            'timer' => (!empty($message['timer'])) ? $message['timer'] : 4000,
            'showConfirmButton' =>  (!empty($message['showConfirmButton'])) ? $message['showConfirmButton'] : true
        ]
    ]);
}
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    <h1><?= Html::encode($this->title) ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card card-success card-outline">
        <div class="card-body login-card-body">
            <div class="product-create">
                <div class="product-create">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="upload-icon">
                            <i class="fas fa-upload"></i>
                        </div>
                        <br>
                        <p class="text-muted m-0">Select a file want to upload</p>

                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

                        <?= $form->field($model, 'image')->fileInput() ?>

                        <button class="btn btn-success">Submit</button>

                        <?php ActiveForm::end() ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


