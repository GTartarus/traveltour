<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DangKyTour\DangkyTour */

$this->title = 'Update Dangky Tour: ' . $model->MSDK;
$this->params['breadcrumbs'][] = ['label' => 'Dangky Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MSDK, 'url' => ['view', 'id' => $model->MSDK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dangky-tour-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
