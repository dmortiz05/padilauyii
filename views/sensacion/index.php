<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\sensacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sensaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sensacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo Sensaciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'nombresensacion',
            'descripcionsensacion',
            'cantidadsensacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
