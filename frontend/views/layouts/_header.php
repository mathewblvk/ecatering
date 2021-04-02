<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

NavBar::begin([
    'brandLabel' => Html::img('@web/ecatering.png') ,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => [
        'navbar-light navbar-white navbar-expand-md fixed-top'
        ]
    ],
]);
$menuItems = [
    ['label' => 'Home', 'url' => ['/site/index']],
    ['label' => 'About', 'url' => ['/site/about']],
    ['label' => 'Contact', 'url' => ['/site/contact']],
    ['label' => '<i class="fas fa-user-friends"></i>&nbsp;Packages For Events', 'url' => ['/site/contact']],
    ['label' => '<i class="fas fa-tags"></i>&nbsp;On Discount', 'url' => ['/site/contact']],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = [
        'label' => '<i class="fas fa-sign-in-alt"></i>&nbsp;Create Account',
        'url' => ['/site/signup']];
    $menuItems[] = [
        'label' => '<i class="fas fa-lock"></i>&nbsp;Login',
        'url' => ['/site/login']];
} else {
    $menuItems[] = [
        'label' => '<i class="fas fa-lock-open"></i>&nbsp;Logout',
        'class' => 'login',
        'url' => ['/site/logout'],
        'linkOptions' => [
            'data-method' => 'post'
        ]
    ];
}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav ml-auto'],
    'items' => $menuItems,
]);
NavBar::end();
?>
