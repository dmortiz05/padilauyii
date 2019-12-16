<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Textil */

$this->title = 'Update Textil: ' . $model->idtextil;
$this->params['breadcrumbs'][] = ['label' => 'Textils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtextil, 'url' => ['view', 'id' => $model->idtextil]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="textil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
