<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aceite */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aceite-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idaceite')->textInput() ?>

    <?= $form->field($model, 'nombreaceite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcionaceite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidadaceite')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
