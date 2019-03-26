<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\DDDL\Tinh;
/* @var $this yii\web\View */
/* @var $model app\models\DDDL\Khachsan */

$this->title = $model->MSKS;
$this->params['breadcrumbs'][] = ['label' => 'Khachsans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">





    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TENKS',
            'DIACHI',
            'SDT',
            [
                //                'name'=> 'LOẠI KHÁCH',
                              'attribute' => 'MST',
                              'value' => function($model){
                                      $TenTinh= Tinh::find()->select(['TENTINH'])->where(['MST' => $model->MST])->one();
                                      return $TenTinh ? $TenTinh->TENTINH:'None';
                                     }
            ],
        ],
    ]) ?>

</div>
