<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Textil */

$this->title = 'Nuevo Textil';
$this->params['breadcrumbs'][] = ['label' => 'Textiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="textil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
