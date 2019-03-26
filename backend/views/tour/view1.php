<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\Tour */

$this->title = $model->MSTOUR;
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

            'TENTOUR',
            'NGAYBD',
            'NGAYKT',
            'GIA',
            'SOLUONG',
            'MSKS',
            'MALOAI',
        ],
    ]) ?>

</div>
