<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Department */

$this->title = 'Update Department: ' . $model->department_name;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->department_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
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
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
