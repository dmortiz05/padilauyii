<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mini */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mini-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //<?= $form->field($model, 'idmini')->textInput() ?>

    <?= $form->field($model, 'nombremini')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcionmini')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidadmini')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
