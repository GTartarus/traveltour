<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\Tour */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'TENTOUR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NGAYBD')->textInput() ?>

    <?= $form->field($model, 'NGAYKT')->textInput() ?>

    <?= $form->field($model, 'GIA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SOLUONG')->textInput() ?>

    <?= $form->field($model, 'MSKS')->dropDownlist($items1) ?>

    <?= $form->field($model, 'MALOAI')->dropDownlist($items) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
