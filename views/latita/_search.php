<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LatitaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="latita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idlatita') ?>

    <?= $form->field($model, 'nombrelatita') ?>

    <?= $form->field($model, 'descripcionlatita') ?>

    <?= $form->field($model, 'cantidadlatita') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
