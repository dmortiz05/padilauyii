<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sensacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sensacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombresensacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcionsensacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidadsensacion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
