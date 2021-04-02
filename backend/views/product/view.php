<?php

use aryelds\sweetalert\SweetAlert;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = $model->product_name .'('.$model->code.')';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

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
<div class="product-view">

    <div class="branch-view">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <h1><?= Html::encode($this->title) ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-body login-card-body">
                        <p>
                            <?= Html::a('<i class="fas fa-edit"></i>', ['update', 'id' => $model->product_id], ['class' => 'btn btn-info']) ?>
                            <?= Html::a('<i class="fas fa-trash"></i>', ['delete', 'id' => $model->product_id], [
                                'class' => 'btn btn-secondary',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p>
                        </p>
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'product_name',
                                'product_price',
                                'code',
                                'branch.branch_name',
                                'status.status_name',
                                'category.category_name',
                                'description',
                            ],
                        ]) ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
