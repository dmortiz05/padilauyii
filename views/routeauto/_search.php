<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RouteautoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="routeauto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idroute') ?>

    <?= $form->field($model, 'nombreroute') ?>

    <?= $form->field($model, 'descripcionroute') ?>

    <?= $form->field($model, 'cantidadroute') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
