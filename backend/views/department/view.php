<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Department */

$this->title = $model->department_name;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="department-view">

    <div class="department-update">
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


        <div class="row">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-body login-card-body">
                        <p>
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-sm btn-danger',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </p>
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'id',
                                'department_name',
                                'branch.branch_name',
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
</div>
