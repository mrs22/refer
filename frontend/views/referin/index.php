<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\referin */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'vn',
            'rfrcs',
            'refer_date',
            'hospcode',
            'date_in',
            // 'clinic',
            // 'hn',
            // 'icd10',
            // 'refer_type',
            // 'docno',
            // 'depcode',
            // 'refer_point',
            // 'staff',
            // 'confirm_date',
            // 'pre_diagnosis',
            // 'ac_type',
            // 'claim_code',
            // 'ac_ae',
            // 'ac_emtype',
            // 'hos_guid',
            // 'has_expire_date',
            // 'expire_date',
            // 'f43_causein_id',
            // 'refer_hospcode',
            // 'referin_number',
            // 'referout_number',
            // 'referin_id',
            // 'refer_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
