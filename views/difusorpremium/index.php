<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DifusorpremiumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Difusor Premium';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="difusorpremium-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo Difusor Premium', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'nombredifusorpremium',
            'descripciondifusorpremium',
            'cantidaddifusorpremium',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
