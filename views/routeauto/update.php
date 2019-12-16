<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Routeauto */

$this->title = 'Update Routeauto: ' . $model->idroute;
$this->params['breadcrumbs'][] = ['label' => 'Routeautos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idroute, 'url' => ['view', 'id' => $model->idroute]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="routeauto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
