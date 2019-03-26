<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DangKyTour\CTDK */

$this->title = 'Create C T D K';
$this->params['breadcrumbs'][] = ['label' => 'C T D Ks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctdk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
