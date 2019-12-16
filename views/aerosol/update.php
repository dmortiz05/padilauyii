<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aerosol */

$this->title = 'Modificar Aerosol: ' . $model->idaerosol;
$this->params['breadcrumbs'][] = ['label' => 'Aerosoles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idaerosol, 'url' => ['view', 'id' => $model->idaerosol]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="aerosol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
