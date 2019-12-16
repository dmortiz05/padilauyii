<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Textil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="textil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //<?= $form->field($model, 'idtextil')->textInput() ?>

    <?= $form->field($model, 'nombretextil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripciontextil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidadtextil')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
