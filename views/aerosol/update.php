<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aerosol */

$this->title = 'Update Aerosol: ' . $model->idaerosol;
$this->params['breadcrumbs'][] = ['label' => 'Aerosols', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idaerosol, 'url' => ['view', 'id' => $model->idaerosol]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aerosol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
