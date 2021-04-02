<?php

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

NavBar::begin([
    'options' => [
            'class' => [
                'main-header navbar navbar-expand-md navbar-light navbar-white'
            ]
        ],
]);
$menuItems = [
    ['label' => '<b>Branch:</b>&nbsp;'.Yii::$app->user->identity->branch->branch_name, 'url' => ['/site/index',  'class'=>'btn btn-success']],
    ['label' => '<i class="fas fa-user-tie"></i>&nbsp;'.Yii::$app->user->identity->username .' Profile', 'url' => ['/site/profile', 'id'=>Yii::$app->user->identity->id]],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
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
