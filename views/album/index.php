<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Album;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlbumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Albums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="album-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Album', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id_alb',
            'nombre_alb',
            'anio_lanz',
            'num_canc_alb',
            'id_artista',
            //'id_banda',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Album $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_alb' => $model->id_alb]);
                }
            ],
        ],
    ]); ?>


</div>
