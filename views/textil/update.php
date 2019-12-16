<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Textil */

$this->title = 'Modificar Textil: ' . $model->idtextil;
$this->params['breadcrumbs'][] = ['label' => 'Textiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtextil, 'url' => ['view', 'id' => $model->idtextil]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="textil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
