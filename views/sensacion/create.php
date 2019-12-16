<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sensacion */

$this->title = 'Create Sensacion';
$this->params['breadcrumbs'][] = ['label' => 'Sensacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sensacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
