<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Branch */

$this->title = 'Update Branch: ' . $model->branch_name;
$this->params['breadcrumbs'][] = ['label' => 'Branches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->branch_name, 'url' => ['view', 'id' => $model->branch_name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="branch-update">
    <div class="department-update">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row ml-1">
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
