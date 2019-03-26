<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DangKyTour\CTDK */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctdk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MSDK')->textInput() ?>

    <?= $form->field($model, 'SDT')->textInput() ?>

    <?= $form->field($model, 'TENKH')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
