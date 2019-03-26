<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\TOUR\Tour;

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

                'attribute' => 'MSTOUR',
                'value' => function($model){
                        $TenTour= Tour::find()->select(['TENTOUR'])->where(['MSTOUR' => $model->MSTOUR])->one();
                        return $TenTour ? $TenTour->TENTOUR:'None';
                       }
            ],
            'SLNL',
            'SLTE',
            'TONGTIEN',
            'SDT',
        ],
    ]) ?>
    <p>
        <a href="https://www.baokim.vn/payment/product/version11?business=hakai.prince%40gmail.com&id=&order_description=&product_name=tour&product_price=5000000&product_quantity=2&total_amount=10000000&url_cancel=&url_detail=&url_success="><img src="\advanced\frontend\web\uploads\thanhtoan-l.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn" ></a>
    </p>
</div>
