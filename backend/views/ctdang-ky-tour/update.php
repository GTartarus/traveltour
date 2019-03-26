<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DangKyTour\CTDK */

$this->title = 'Update C T D K: ' . $model->MSDK;
$this->params['breadcrumbs'][] = ['label' => 'C T D Ks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MSDK, 'url' => ['view', 'MSDK' => $model->MSDK, 'SDT' => $model->SDT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ctdk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
