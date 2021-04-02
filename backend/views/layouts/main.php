<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Html;
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
<body class="hold-transition sidebar-mini layout-fixed dashboard-panel">
<?php $this->beginBody() ?>
<div class="wrapper">
    <?php echo $this->render('_header') ?>
    <?php echo $this->render('_sidebar') ?>
    
    <div class="content">
        <div class="content-wrapper">
            <div class="container-fluid pt-3">
                <?= Breadcrumbs::widget([
                    'itemTemplate' => "\n\t<li class=\"breadcrumb-item\"><i>{link}</i></li>\n",
                    'activeItemTemplate' => "\t<li class=\"breadcrumb-item active\">{link}</li>\n",
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <div id="app-content">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
