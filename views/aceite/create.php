<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aceite */

$this->title = 'Create Aceite';
$this->params['breadcrumbs'][] = ['label' => 'Aceites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aceite-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
