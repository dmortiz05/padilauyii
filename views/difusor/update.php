<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Difusor */

$this->title = 'Modificar Difusor: ' . $model->iddifusor;
$this->params['breadcrumbs'][] = ['label' => 'Difusores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddifusor, 'url' => ['view', 'id' => $model->iddifusor]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="difusor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
