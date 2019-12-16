<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DifusorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Difusores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="difusor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo Difusor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'nombredifusor',
            'descripciondifusor',
            'cantidaddifusor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
