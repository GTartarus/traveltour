<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\DDDL\Tinh;
/* @var $this yii\web\View */
/* @var $model app\models\DDDL\Diadiem */

$this->title = $model->MADD;
$this->params['breadcrumbs'][] = ['label' => 'Diadiems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TENDD',
            'DIACHI',
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
