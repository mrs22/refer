<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\referin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="referin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'vn') ?>

    <?= $form->field($model, 'rfrcs') ?>

    <?= $form->field($model, 'refer_date') ?>

    <?= $form->field($model, 'hospcode') ?>

    <?= $form->field($model, 'date_in') ?>

    <?php // echo $form->field($model, 'clinic') ?>

    <?php // echo $form->field($model, 'hn') ?>

    <?php // echo $form->field($model, 'icd10') ?>

    <?php // echo $form->field($model, 'refer_type') ?>

    <?php // echo $form->field($model, 'docno') ?>

    <?php // echo $form->field($model, 'depcode') ?>

    <?php // echo $form->field($model, 'refer_point') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <?php // echo $form->field($model, 'confirm_date') ?>

    <?php // echo $form->field($model, 'pre_diagnosis') ?>

    <?php // echo $form->field($model, 'ac_type') ?>

    <?php // echo $form->field($model, 'claim_code') ?>

    <?php // echo $form->field($model, 'ac_ae') ?>

    <?php // echo $form->field($model, 'ac_emtype') ?>

    <?php // echo $form->field($model, 'hos_guid') ?>

    <?php // echo $form->field($model, 'has_expire_date') ?>

    <?php // echo $form->field($model, 'expire_date') ?>

    <?php // echo $form->field($model, 'f43_causein_id') ?>

    <?php // echo $form->field($model, 'refer_hospcode') ?>

    <?php // echo $form->field($model, 'referin_number') ?>

    <?php // echo $form->field($model, 'referout_number') ?>

    <?php // echo $form->field($model, 'referin_id') ?>

    <?php // echo $form->field($model, 'refer_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
