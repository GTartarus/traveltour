<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DangKyTour\DangkyTourSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dangky Tours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dangky-tour-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Dangky Tour', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MSDK',
            'MSTOUR',
            'SLNL',
            'SLTE',
            'GIA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
