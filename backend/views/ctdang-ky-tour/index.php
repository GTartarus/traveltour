<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DangKyTour\CTDKSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'C T D Ks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctdk-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create C T D K', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MSDK',
            'SDT',
            'TENKH',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
