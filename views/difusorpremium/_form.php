<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Difusorpremium */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="difusorpremium-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iddifusorpremium')->textInput() ?>

    <?= $form->field($model, 'nombredifusorpremium')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripciondifusorpremium')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidaddifusorpremium')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
