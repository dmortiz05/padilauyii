<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LatitaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Latitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="latita-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo Latita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'nombrelatita',
            'descripcionlatita',
            'cantidadlatita',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
