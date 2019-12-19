<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Latita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="latita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombrelatita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcionlatita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidadlatita')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
