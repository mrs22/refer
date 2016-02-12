<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\referin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rfrcs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_date')->textInput() ?>

    <?= $form->field($model, 'hospcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_in')->textInput() ?>

    <?= $form->field($model, 'clinic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icd10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_type')->textInput() ?>

    <?= $form->field($model, 'docno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'refer_point')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirm_date')->textInput() ?>

    <?= $form->field($model, 'pre_diagnosis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'claim_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_ae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ac_emtype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hos_guid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'has_expire_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expire_date')->textInput() ?>

    <?= $form->field($model, 'f43_causein_id')->textInput() ?>

    <?= $form->field($model, 'refer_hospcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referin_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referout_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referin_id')->textInput() ?>

    <?= $form->field($model, 'refer_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
