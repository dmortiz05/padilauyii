<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aerosol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aerosol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombreaerosol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcionaerosol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagen')->textInput() ?>

    <?= $form->field($model, 'cantidadaerosol')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
