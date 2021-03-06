<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AerosolSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aerosol';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aerosol-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo Aerosol', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'nombreaerosol',
            'descripcionaerosol',
            'cantidadaerosol',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
