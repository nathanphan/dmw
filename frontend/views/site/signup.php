<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\User;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Register';

?>
<section class="section-white clearfix">
<div class="site-signup">
    <div class="widget-title">
        <h3><?= Html::encode($this->title) ?></h3>
    </div>
    <p>Please fill out the following fields to register:</p>

    <div class="row">
        <div class="col-lg-5 col-md-5 col-md-offset-4 col-lg-offset-4">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'type')->radioList(User::getUserType()) ?>
                <div class="form-group">
                    <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</section>