<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '18+ Tour';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="ftco-section">
<div class="site-tour">
<h1><?= Html::encode($this->title) ?></h1>
    <?php if($Tour):?>
    <div class="row">
        <?php foreach($Tour as $item) :?>

            <div class="col-md-1>">
                <img src="<?php echo $item->HINHANH?>" class="img-responsive" >
            </div>

            <div class="col-lg-2">
                <h2><?php echo $item->TENTOUR;?></h2>
                <?php echo $item->MSKS;?>
                <?php echo $item->GIA;?>
                <p>
                    <?php echo Html::a('Xem thêm &raquo;',['tour/view1','MSTOUR'=>$item->MSTOUR],['class'=>'btn btn-info']);?>
                </p>
                <p>
                    <?php echo Html::a('Đặt Tour &raquo;',['dang-ky-tour/create','MSTOUR'=>$item->MSTOUR],['class'=>'btn btn-info']);?>
                </p>
            </div>
        <?php endforeach;?>
        </div>
    <?php endif;?>
</div>
</section>