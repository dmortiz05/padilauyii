<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aerosol */

$this->title = 'Create Aerosol';
$this->params['breadcrumbs'][] = ['label' => 'Aerosols', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aerosol-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
