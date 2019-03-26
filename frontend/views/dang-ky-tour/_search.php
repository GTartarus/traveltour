<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DangKyTour\DangkyTourSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dangky-tour-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MSDK') ?>

    <?= $form->field($model, 'MSTOUR') ?>

    <?= $form->field($model, 'SLNL') ?>

    <?= $form->field($model, 'SLTE') ?>

    <?= $form->field($model, 'GIA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
