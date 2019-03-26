<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\TOUR\Tour;
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
            [
  //                'name'=> 'LOẠI KHÁCH',
                'attribute' => 'Tour',
                'value' => function($model){
                        $Tour= Tour::find()->select(['TENTOUR'])->where(['MSTOUR' => $model->MSTOUR])->one();
                        return $Tour ? $Tour->TENTOUR:'None';
                       }
            ],
            // 'SLNL',
            // 'SLTE',
            [
                'attribute' => 'THANHTOAN',
                'value' => function($model){
                         if($model->THANHTOAN == '1'){
                            return 'Đã Thanh Toán';
                         }return 'Chưa Thanh Toán';
                       }
            ],
            'TONGTIEN',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
