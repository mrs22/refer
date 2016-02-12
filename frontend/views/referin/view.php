<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\referin */

$this->title = $model->vn;
$this->params['breadcrumbs'][] = ['label' => 'Referins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->vn], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->vn], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'vn',
            'rfrcs',
            'refer_date',
            'hospcode',
            'date_in',
            'clinic',
            'hn',
            'icd10',
            'refer_type',
            'docno',
            'depcode',
            'refer_point',
            'staff',
            'confirm_date',
            'pre_diagnosis',
            'ac_type',
            'claim_code',
            'ac_ae',
            'ac_emtype',
            'hos_guid',
            'has_expire_date',
            'expire_date',
            'f43_causein_id',
            'refer_hospcode',
            'referin_number',
            'referout_number',
            'referin_id',
            'refer_time',
        ],
    ]) ?>

</div>
