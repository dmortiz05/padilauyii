<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Difusorpremium */

$this->title = 'Nuevo Difusor Premium';
$this->params['breadcrumbs'][] = ['label' => 'Difusor premium', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="difusorpremium-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
