<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Routeauto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="routeauto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idroute')->textInput() ?>

    <?= $form->field($model, 'nombreroute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcionroute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidadroute')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
