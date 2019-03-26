<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DangKyTour\DangkyTour */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dangky-tour-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'SLNL')-> textInput()?>

    <?= $form->field($model, 'SLTE')->textInput() ?>

    <?= $form->field($model, 'SDT')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Xác Nhận',  ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
