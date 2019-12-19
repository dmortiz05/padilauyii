<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sahumeriomasala */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sahumeriomasala-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombresahumeriomasala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcionsahumeriomasala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidadsahumeriomasala')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
