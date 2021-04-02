<?php

use nullref\datatable\LinkColumn;
use yii\grid\SerialColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registered Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="row ml-1">
                        <?=   Html::a('<i class="fas fa-home"></i>',['site/index'], ['class' => 'btn btn-sm btn-success']); ?>
                        <h1><?= Html::encode($this->title) ?></h1>
                    </div>
                </div>
                <div class="col-sm-8 float-sm-right text-right">
                    <?=   Html::a('<i class="fas fa-arrow-circle-left"></i>',['site/index'], ['class' => 'btn btn-sm btn-success']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-success card-outline">
                <div class="card-body login-card-body">
                    <p>
                        <?= Html::a('Register new user', ['create'], ['class' => 'btn btn-sm btn-success']) ?>
                    </p>
                    <?= \nullref\datatable\DataTable::widget([
                        'data' => $dataProvider->getModels(),
                        'columns' => [
                            'username',
//                          'status',
//                          'auth_key',
//                          'password_hash',
                            //'password_reset_token',
                            'email:email',
                            //'created_at',
                            //'updated_at',
                            //'verification_token',
                            'first_name',
                            'last_name',
//                            'address',
                            'phone_number',
//                          'city',
//                          'country',
                            'role.role_name',
                            'branch.branch_name',
                            'department.department_name',
                            [
                                'class' => LinkColumn::class,
                                'url' => ['/user/update'],
                                'label' => '<i class="fas fa-edit"></i>',
                            ],
                            [
                                'class' => LinkColumn::class,
                                'url' => ['/user/show',],
                                'label' => '<i class="fas fa-eye"></i>',
                            ],
                            [
                                'class' => LinkColumn::class,
                                'url' => ['/user/delete'],
                                'linkOptions' => ['data-confirm' => 'Are you sure you want to delete this item?', 'data-method' => 'post'],
                                'label' => '<i class="fas fa-trash"></i>',
                            ],
                        ],

                    ]); ?>
                </div>
            </div>
        </div>

        