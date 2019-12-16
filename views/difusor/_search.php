<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DifusorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="difusor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddifusor') ?>

    <?= $form->field($model, 'nombredifusor') ?>

    <?= $form->field($model, 'descripciondifusor') ?>

    <?= $form->field($model, 'cantidaddifusor') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
