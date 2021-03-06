<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KhachHang\Khachhang */

$this->title = 'Update Khachhang: ' . $model->SDT;
$this->params['breadcrumbs'][] = ['label' => 'Khachhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SDT, 'url' => ['view', 'id' => $model->SDT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khachhang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
                'items' => $items,
    ]) ?>

</div>
