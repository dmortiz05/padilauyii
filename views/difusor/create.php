<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Difusor */

$this->title = 'Nuevo Difusor';
$this->params['breadcrumbs'][] = ['label' => 'Difusores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="difusor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
