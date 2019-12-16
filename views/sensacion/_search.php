<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\sensacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sensacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idsensacion') ?>

    <?= $form->field($model, 'nombresensacion') ?>

    <?= $form->field($model, 'descripcionsensacion') ?>

    <?= $form->field($model, 'cantidadsensacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
