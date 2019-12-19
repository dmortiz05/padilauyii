<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Latita */

$this->title = 'Modificar Latita: ' . $model->idlatita;
$this->params['breadcrumbs'][] = ['label' => 'Latitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idlatita, 'url' => ['view', 'id' => $model->idlatita]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="latita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
