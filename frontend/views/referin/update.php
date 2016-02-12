<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\referin */

$this->title = 'Update Referin: ' . ' ' . $model->vn;
$this->params['breadcrumbs'][] = ['label' => 'Referins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vn, 'url' => ['view', 'id' => $model->vn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
