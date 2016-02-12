<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\referin */

$this->title = 'Create Referin';
$this->params['breadcrumbs'][] = ['label' => 'Referins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
