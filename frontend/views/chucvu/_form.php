<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chucvu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chucvu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TENCV')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MOTA')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
