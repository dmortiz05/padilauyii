<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AceiteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aceites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aceite-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nuevo Aceite', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'nombreaceite',
            'descripcionaceite',
            'cantidadaceite',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
