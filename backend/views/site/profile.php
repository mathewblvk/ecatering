<?php

use aryelds\sweetalert\SweetAlert;
use common\models\Branch;
use common\models\Department;
use common\models\Role;
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username ." ". 'Profile';
$role = $model->username;
$first_name = $model->first_name;
$last_name = $model->last_name;

foreach (Yii::$app->session->getAllFlashes() as $message) {
    echo SweetAlert::widget([
        'options' => [
            'title' => (!empty($message['title'])) ? Html::encode($message['title']) : 'Title Not Set!',
            'text' => (!empty($message['text'])) ? Html::encode($message['text']) : 'Text Not Set!',
            'type' => (!empty($message['type'])) ? $message['type'] : SweetAlert::TYPE_INFO,
            'timer' => (!empty($message['timer'])) ? $message['timer'] : 4000,
            'showConfirmButton' =>  (!empty($message['showConfirmButton'])) ? $message['showConfirmButton'] : true
        ]
    ]);
}

$branches = Branch::find()->all();
$branchList = ArrayHelper::map($branches,'id','branch_name');

$roles = Role::find()->all();
$roleList = ArrayHelper::map($roles,'id','role_name');

$department = Department::find()->all();
$departmentList = ArrayHelper::map($department,'id','department_name');


$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="row ml-1">
                    <a href="" class="btn btn-success mr-2"> <i class="fas fa-home"></i> </a>
                    <h1><?= Html::encode($this->title) ?></h1>
                </div>
            </div>
            <div class="col-sm-4 float-sm-right text-right">
                <?=   Html::a('<i class="fas fa-arrow-circle-left"></i>',['site/index'], ['class' => 'btn btn-success']); ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-success card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                      <?php echo Html::img('@web/avatar.png') ?>
                </div>

                <h3 class="profile-username text-center"></h3>

                <p class="text-muted text-center">Role: <?= Html::encode($role) ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>First Name</b> <a class="float-right"><?= Html::encode($first_name) ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Last Name</b> <a class="float-right"><?= Html::encode($last_name) ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Department</b> <a class="float-right"><?= Html::encode($model->department->department_name) ?></a>
                  </li>
                    <li class="list-group-item">
                        <b>Branch</b> <a class="float-right"><?= Html::encode($model->branch->branch_name) ?></a>
                    </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">Contact Info</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-phone mr-1"></i><?= Html::encode($model->phone_number) ?></strong>

                <hr>
              <strong><i class="fas fa-address-card mr-1"></i><?= Html::encode($model->address) ?></strong>
                  

              <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> <?= Html::encode($model->city) ?></strong>

                <p class="text-muted"><?= Html::encode($model->country) ?></p>
                <hr>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Change Profile Picture</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Change Password</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update Account</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                      <div class="product-create">
                          <div class="product-create">
                              <div class="d-flex flex-column justify-content-center align-items-center">
                                  <div class="upload-icon">
                                      <i class="fas fa-upload"></i>
                                  </div>
                                  <br>
                                  <p class="text-muted m-0">Select a file want to upload</p>

                                  <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

                                  <?= $form->field($model, 'profileImage')->fileInput() ?>

                                  <button class="btn btn-success">Submit</button>

                                  <?php ActiveForm::end() ?>

                              </div>
                          </div>
                      </div>

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                      <?php $form = ActiveForm::begin(['id'=>'branch-form','options' => ['class' => 'form-horizontal']]); ?>

                      <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

                      <?= $form->field($model, 'new_password')->passwordInput(['maxlength' => true]) ?>

                      <div class="form-group">
                          <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                      </div>

                      <?php ActiveForm::end(); ?>
                  </div>
                  <div class="tab-pane" id="settings">
                          <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                          <div class="row">
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'first_name')->textInput(['autofocus' => true]) ?>
                              </div>
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'last_name')->textInput(['autofocus' => true]) ?>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                              </div>
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'email') ?>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'address')->textInput(['autofocus' => true]) ?>
                              </div>
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'phone_number')->textInput(['autofocus' => true]) ?>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'department_id')->dropDownList($departmentList, ['prompt' => '--Select Department--']) ?>
                              </div>
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'branch_id')->dropDownList($branchList, ['prompt' => '--Select Branch--']) ?>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'city')->textInput(['autofocus' => true]) ?>
                              </div>
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'country')->textInput(['autofocus' => true]) ?>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6">
                                  <?= $form->field($model, 'role_id')->dropDownList($roleList, ['prompt' => '--Select Role--']) ?>
                              </div>
                          </div>
                          <div class="form-group">
                              <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                          </div>
                          <?php ActiveForm::end(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>