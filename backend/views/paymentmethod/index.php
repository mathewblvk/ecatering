<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payment Methods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payment-method-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Payment Method', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'card_number',
            'code',
            'date_form',
            //'date_to',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
