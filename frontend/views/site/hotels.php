<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '18+ Hotels';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-hotels">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php if($Khachsan):?>
        <div class="row">
        <?php foreach($Khachsan as $item) :?>
            <div class="col-lg-2">
                <h2><?php echo $item->TENKS;?></h2>
                <?php echo $item->DIACHI;?>

                <p>
                    <?php echo Html::a('Xem thêm &raquo;',['/khachsan/view1','MSKS'=>$item->MST],['class'=>'btn btn-info']);?>
                </p>
            </div>
        <?php endforeach;?>
        </div>
    <?php endif;?>
</div>
