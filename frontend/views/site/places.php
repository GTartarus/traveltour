<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '18+ Places';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-places">
<h1><?= Html::encode($this->title) ?></h1>
    <?php if($DiaDiem):?>
        <div class="row">
        <?php foreach($DiaDiem as $item) :?>
            <div class="col-lg-2">
                <h2><?php echo $item->TENDD;?></h2>
                <?php echo $item->DIACHI;?>

                <p>
                    <?php echo Html::a('Xem thêm &raquo;',['/diadiem/view1','MADD'=>$item->MADD],['class'=>'btn btn-info']);?>
                </p>
            </div>
        <?php endforeach;?>
        </div>
    <?php endif;?>
</div>
