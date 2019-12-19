<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sahumeriomasala */

$this->title = 'Modificar Sahumerios Masala: ' . $model->idsahumeriomasala;
$this->params['breadcrumbs'][] = ['label' => 'Sahumerios Masala', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idsahumeriomasala, 'url' => ['view', 'id' => $model->idsahumeriomasala]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="sahumeriomasala-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
