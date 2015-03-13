<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\User;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

?>

<section class="section-white nopadding clearfix">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
            <?php $form = ActiveForm::begin(['id' => 'employee-form']); ?>
            <?= $form->field($profile, 'firstname') ?>
            <?= $form->field($profile, 'lastname') ?>
            <?= $form->field($profile, 'address') ?>
            <?= $form->field($profile, 'phone_number') ?>
            <?= $form->field($profile, 'gender') ?>
            <?= $form->field($profile, 'nationality') ?>
            <?= $form->field($profile, 'ethic_group') ?>
            <?= $form->field($profile, 'shift') ?>
            <?= $form->field($profile, 'experience') ?>
            <?= $form->field($profile, 'reference') ?>


            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'save-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>
