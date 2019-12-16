<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Difusor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="difusor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iddifusor')->textInput() ?>

    <?= $form->field($model, 'nombredifusor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripciondifusor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidaddifusor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
