<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mini */

$this->title = 'Modificar Mini: ' . $model->idmini;
$this->params['breadcrumbs'][] = ['label' => 'Mini', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmini, 'url' => ['view', 'id' => $model->idmini]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="mini-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
