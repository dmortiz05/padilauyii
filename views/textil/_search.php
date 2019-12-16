<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TextilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="textil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idtextil') ?>

    <?= $form->field($model, 'nombretextil') ?>

    <?= $form->field($model, 'descripciontextil') ?>

    <?= $form->field($model, 'cantidadtextil') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
