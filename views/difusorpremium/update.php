<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Difusorpremium */

$this->title = 'Modificar Difusor Premium: ' . $model->iddifusorpremium;
$this->params['breadcrumbs'][] = ['label' => 'Difusor Premium', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddifusorpremium, 'url' => ['view', 'id' => $model->iddifusorpremium]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="difusorpremium-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
