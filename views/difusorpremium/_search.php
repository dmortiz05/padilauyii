<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DifusorpremiumSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="difusorpremium-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddifusorpremium') ?>

    <?= $form->field($model, 'nombredifusorpremium') ?>

    <?= $form->field($model, 'descripciondifusorpremium') ?>

    <?= $form->field($model, 'cantidaddifusorpremium') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
