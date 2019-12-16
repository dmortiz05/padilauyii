<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aceite */

$this->title = 'Modificar Aceite: ' . $model->idaceite;
$this->params['breadcrumbs'][] = ['label' => 'Aceites', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idaceite, 'url' => ['view', 'id' => $model->idaceite]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="aceite-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
