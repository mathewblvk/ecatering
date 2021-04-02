<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container text-center">
    <hr style="width: 400px; background-color: green; height: 6px">
    <h1 class="text-warning" style="font-family: 'Century Schoolbook'"><?= Html::encode($this->title) ?></h1>
    <i class="fas fa-carrot text-warning" style="font-size: 40px"></i>
    <hr style="width: 700px; background-color: green; height: 6px">
    <div class="row pb-5">
        <dic class="col-md-6">
            <h3 style="font-family: 'Century Schoolbook'; color: green">WELCOME...</h3>
            <p>TConsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etae magna aliqua. \
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.

                TConsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etae magna aliqua. \
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,

            </p>
        </dic>
        <dic class="col-md-6">
            <?php echo Html::img('@web/food4.png', [
                'height' => '300px' ,
                'width' => '500px'
            ]) ?>
        </dic>
    </div>
</div>
