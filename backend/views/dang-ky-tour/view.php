<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\TOUR\Tour;

/* @var $this yii\web\View */
/* @var $model app\models\DangKyTour\DangkyTour */

$this->title = $model->MSDK;
$this->params['breadcrumbs'][] = ['label' => 'Dangky Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dangky-tour-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MSDK], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MSDK], [
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

          [
              'attribute' => 'Thanh Toán',
              'value' => function($model){
                       if($model->THANHTOAN == '1'){
                          return 'Đã Thanh Toán';
                       }return 'Chưa Thanh Toán';
                     }
          ],
            'SLNL',
            'SLTE',
            'TONGTIEN',
            'SDT',
        ],
    ]) ?>
    <p>
        <?php echo Html::a('Xác nhận;',['site/index'],['class'=>'btn btn-info']);?>
    </p>
</div>
