<?php

use nullref\datatable\LinkColumn;
use yii\grid\SerialColumn;
use aryelds\sweetalert\SweetAlert;
use common\models\Department;
use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Branch;
use common\models\Product;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
$model = new Product();

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
            <div class="col-sm-4">
                <div class="row ">
                    <h1><?= Html::encode($this->title) ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-success card-outline">
            <div class="card-body login-card-body">
                <p><?= Html::button('Create Branch', ['value'=>Url::to('create'),'class' => 'btn btn-sm btn-success','id'=>'modal-btn']) ?></p>
                <?php
                Modal::begin([
                    'headerOptions'=> ['header'=>'<h4>Create New Product</h4>'],
                    'id'=> 'modal',
                    'size'=>'modal-lg',
                ]);
                echo '<div id="modal-content"></div>';
                Modal::end();
                ?>

                <?= \nullref\datatable\DataTable::widget([
                    'data' => $dataProvider->getModels(),
                    'columns' => [
                        'product_id',
                        'product_name',
                        'product_price',
                        'code',
                        'status.status_name',
                        'category.category_name',
                        [
                            'class' => LinkColumn::class,
                            'url' => ['/product/update'],
                            'label' => '<i class="fas fa-edit"></i>',
                        ],
                        [
                            'class' => LinkColumn::class,
                            'url' => ['/product/view'],
                            'label' => '<i class="fas fa-eye"></i>',
                        ],
                        [
                            'class' => LinkColumn::class,
                            'url' => ['/product/delete'],
                            'linkOptions' => ['data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'post'],
                            'label' => '<i class="fas fa-trash"></i>',
                        ],
                    ],

                ]); ?>

            </div>
        </div>
    </div>


