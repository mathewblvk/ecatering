<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\SignupAsset;
use yii\helpers\Html;
use common\widgets\Alert;

SignupAsset::register($this);
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
<body class="hold-transition login-page">
<div id="login-panel">
    <div class="login-box">
        <div class="login-logo">
            <?php echo Html::img('@web/ecatering1.png') ?>
        </div>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
