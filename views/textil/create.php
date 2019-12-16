<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Textil */

$this->title = 'Create Textil';
$this->params['breadcrumbs'][] = ['label' => 'Textils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="textil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
