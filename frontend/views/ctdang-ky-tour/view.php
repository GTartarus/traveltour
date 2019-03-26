<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DangKyTour\CTDK */

$this->title = $model->MSDK;
$this->params['breadcrumbs'][] = ['label' => 'C T D Ks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ctdk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'MSDK' => $model->MSDK, 'SDT' => $model->SDT], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'MSDK' => $model->MSDK, 'SDT' => $model->SDT], [
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
            'MSDK',
            'SDT',
            'TENKH',
        ],
    ]) ?>

</div>
