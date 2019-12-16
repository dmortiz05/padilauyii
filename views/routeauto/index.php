<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RouteautoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Routeautos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="routeauto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Routeauto', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idroute',
            'nombreroute',
            'descripcionroute',
            'cantidadroute',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
