<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Routeauto */

$this->title = 'Create Routeauto';
$this->params['breadcrumbs'][] = ['label' => 'Routeautos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="routeauto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
