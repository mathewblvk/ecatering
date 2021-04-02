<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head();
    use common\models\Branch;
    use common\models\Product;
    use common\models\User;
    $branchCount = count(Branch::find()->all());
    $productCount = count(Product::find()->all());
    $customerCount = count(User::find()->all());
    ?>

</head>
<body class="hold-transition layout-top-nav">
<?php $this->beginBody() ?>
<?php echo $this->render('_header') ?>
<div class="content" style="padding-top: 80px">
    <div class="container-fluid">
        <div class="row" style="font-family: 'Century Schoolbook'">
            <div class="order-header">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <?php echo Html::img('@web/cover.jpg') ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="text-white">Welcome to E-catering</h1>
                                <h4 class="text-white pb-3">Planning your company’s next sales meeting, executive luncheon, or training? Food is a critical part of your event’s success.,
                                    It’s important to select food that’s delicious, convenient to eat during the meeting, and stays on budget. But, planning the food for an event doesn’t have to be complicated.
                                    E-catering is can help you find all different kinds of food and have it delivered with affordable prices,
                                    <br>
                                    <br>
                                    <button class="btn btn-warning">Take a close look at our menu..</button>
                                </h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <?php echo Html::img('@web/image7.jpg') ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="text-white">Welcome to E-catering</h1>
                                <h4 class="text-white pb-3">Planning your company’s next sales meeting, executive luncheon, or training? Food is a critical part of your event’s success.,
                                    It’s important to select food that’s delicious, convenient to eat during the meeting, and stays on budget. But, planning the food for an event doesn’t have to be complicated.
                                    E-catering is can help you find all different kinds of food and have it delivered with affordable prices,
                                    <br>
                                    <br>
                                    <button class="btn btn-warning">Take a close look at our menu..</button>
                                </h4>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <?php echo Html::img('@web/food5.jpg') ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="text-white">Welcome to E-catering</h1>
                                <h4 class="text-white pb-3">Planning your company’s next sales meeting, executive luncheon, or training? Food is a critical part of your event’s success.,
                                    It’s important to select food that’s delicious, convenient to eat during the meeting, and stays on budget. But, planning the food for an event doesn’t have to be complicated.
                                    E-catering is can help you find all different kinds of food and have it delivered with affordable prices,
                                    <br>
                                    <br>
                                    <button class="btn btn-warning">Take a close look at our menu..</button>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <?= Alert::widget() ?>
        <?= $content ?>

        <footer class="footer mt-auto py-3 bg-light">
            <div class="container-fluid">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 0.0.1
                </div>
                <strong>Copyright &copy; 2020-2021 <a href="http://adminlte.io">e-catering</a>.</strong> All rights
                reserved.
            </div>
        </footer>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
