<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SahumeriomasalaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sahumerios Masala';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sahumeriomasala-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo Sahumerio Masala', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'nombresahumeriomasala',
            'descripcionsahumeriomasala',
            'cantidadsahumeriomasala',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
