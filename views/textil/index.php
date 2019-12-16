<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TextilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Textils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="textil-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Textil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idtextil',
            'nombretextil',
            'descripciontextil',
            'cantidadtextil',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
