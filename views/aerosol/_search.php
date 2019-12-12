<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AerosolSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aerosol-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idaerosol') ?>

    <?= $form->field($model, 'nombreaerosol') ?>

    <?= $form->field($model, 'descripcionaerosol') ?>

    <?= $form->field($model, 'cantidadaerosol') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
