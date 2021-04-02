
<aside class="main-sidebar sidebar-dark-secondary">
    <!-- Brand Logo -->
    <a class="brand-link text-center">
        <?php use yii\bootstrap4\Html;
        echo Html::img('@web/ecatering.png') ?>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <?php if (Yii::$app->user->identity->role->id == 1) {  ?>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-home"></i> Home', ['site/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-laptop-house"></i> Branches', ['branch/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-building"></i> Departments', ['department/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-utensils"></i> Catering Services', ['site/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-coins"></i> Orders', ['order/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-store-alt"></i> Store', ['store/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-people-carry"></i> Products & Materials', ['product/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-users"></i> Employees', ['user/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-briefcase"></i> System Administration', ['site/index'], ['class' => 'nav-link']) ?>
                    </li>
                <?php } if (Yii::$app->user->identity->role->id == 2) {  ?>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-home"></i> Home', ['site/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-store-alt"></i> Store', ['store/index'], ['class' => 'nav-link']) ?>
                    </li>
                    <li class="nav-item">
                        <?= Html::a('<i class="fas fa-people-carry"></i> Products & Materials', ['product/index'], ['class' => 'nav-link']) ?>
                    </li>
             <?php } ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>