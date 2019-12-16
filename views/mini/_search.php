<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MiniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mini-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idmini') ?>

    <?= $form->field($model, 'nombremini') ?>

    <?= $form->field($model, 'descripcionmini') ?>

    <?= $form->field($model, 'cantidadmini') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
