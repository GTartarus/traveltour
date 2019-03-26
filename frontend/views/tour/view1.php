<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\DDDL\Khachsan;
use frontend\models\TOUR\Loaitour;
/* @var $this yii\web\View */
/* @var $model app\models\TOUR\Tour */

$this->title = $model->TENTOUR;
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">

    <h1><?= Html::encode($this->title) ?></h1>
            <div class="col-md-4>">
                <img src="<?php echo $model->HINHANH?>" class="img-responsive" >
            </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [


            'NGAYBD',
            'NGAYKT',
            'GIA',
            'SOLUONG',
            [
  //                'name'=> 'LOẠI KHÁCH',
                'attribute' => 'Khách Sạn',
                'value' => function($model){
                        $Tenks= Khachsan::find()->select(['TENKS'])->where(['MSKS' => $model->MSKS])->one();
                        return $Tenks ? $Tenks->TENKS:'None';
                       }
            ],
            [
  //                'name'=> 'LOẠI KHÁCH',
                'attribute' => 'Loại Tour',
                'value' => function($model){
                        $TenLoai= Loaitour::find()->select(['TENLOAI'])->where(['MALOAI' => $model->MALOAI])->one();
                        return $TenLoai ? $TenLoai->TENLOAI:'None';
                       }
            ],
        ],
    ]) ?>

    <p>
        <?= Html::a('Đặt Tour' ,['dang-ky-tour/create','MSTOUR'=>$model->MSTOUR], ['class' => 'btn btn-success btn-lg']) ?>
    </p>
</div>
