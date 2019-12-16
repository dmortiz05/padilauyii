<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mini */

$this->title = 'Nuevo Mini';
$this->params['breadcrumbs'][] = ['label' => 'Mini', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mini-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
