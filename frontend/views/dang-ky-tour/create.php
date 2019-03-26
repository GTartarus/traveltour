<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DangKyTour\DangkyTour */

$this->title = 'Chọn Số Lượng';
$this->params['breadcrumbs'][] = ['label' => 'Dangky Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dangky-tour-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,

    ]) ?>

</div>
