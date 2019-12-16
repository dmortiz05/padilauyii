<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sensacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sensacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idsensacion')->textInput() ?>

    <?= $form->field($model, 'nombresensacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidadsensacion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
