<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Routeauto */

$this->title = 'Modificar Route 66: ' . $model->idroute;
$this->params['breadcrumbs'][] = ['label' => 'Route 66', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idroute, 'url' => ['view', 'id' => $model->idroute]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="routeauto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
