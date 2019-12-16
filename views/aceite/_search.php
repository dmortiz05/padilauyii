<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AceiteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aceite-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idaceite') ?>

    <?= $form->field($model, 'nombreaceite') ?>

    <?= $form->field($model, 'descripcionaceite') ?>

    <?= $form->field($model, 'cantidadaceite') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
