<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sahumeriomasala */

$this->title = 'Nuevo Sahumerio Masala';
$this->params['breadcrumbs'][] = ['label' => 'Sahumerios Masala', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sahumeriomasala-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
