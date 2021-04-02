<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\BranchAsset;
use yii\helpers\Html;
use common\widgets\Alert;

BranchAsset::register($this);
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
    <?php $this->head() ?>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
    <?= Alert::widget() ?>
    <?= $content ?>
</div>
</body>
</html>
<?php $this->endPage() ?>

