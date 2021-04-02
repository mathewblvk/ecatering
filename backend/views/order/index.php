<?php

use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Available Orders';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="order-index">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row ml-1">
                        <a href="" class="btn btn-success mr-2"> <i class="fas fa-home"></i> </a>
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                </div>
                <div class="col-sm-8 float-right text-right">
                    <?=   Html::a('<i class="fas fa-arrow-circle-left"></i>',['site/index'], ['class' => 'btn btn-success']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-body login-card-body">
                    <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
                    </p>
                    <?php
                    Modal::begin([
                        'headerOptions'=> ['header'=>'<h4>Create New Branch</h4>'],
                        'id'=> 'modal',
                        'size'=>'modal-md',
                    ]);
                    echo '<div id="modal-content"></div>';
                    Modal::end();
                    ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'user_id',
                            'delivery_note:ntext',
                            'delivery_time',
                            'delivery_day',
                            //'created_at',
                            //'updated_at',
                            //'branch_id',
                            //'transaction_id',
                            //'status',
                            //'shipping_method',
                            //'shipping_amount',
                            //'grand_amount',
                            //'currency_type',
                            //'company',
                            ['class' => 'yii\grid\ActionColumn',
                                'buttons' => [
                                    'delete' => function($url){
                                        return Html::a('<i class="fas fa-trash"></i>', $url, [
                                            'data-method' => 'post',
                                            'data-confirm' => 'Are you sure?',
                                        ]);
                                    },
                                    'update' => function($url){
                                        return Html::a('<i class="fas fa-edit"></i>', $url, [
                                        ]);
                                    },
                                    'view' => function($url){
                                        return Html::a('<i class="fas fa-eye"></i>', $url, [
                                        ]);
                                    },
                                ]
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

