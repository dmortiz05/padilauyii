<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SahumeriomasalaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sahumeriomasala-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idsahumeriomasala') ?>

    <?= $form->field($model, 'nombresahumeriomasala') ?>

    <?= $form->field($model, 'descripcionsahumeriomasala') ?>

    <?= $form->field($model, 'cantidadsahumeriomasala') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
