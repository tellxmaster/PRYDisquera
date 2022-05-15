<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Cancion;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CancionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Canciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cancion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Cancion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id_canc',
            'nombre_canc',
            'duracion_canc',
            'anio_lanz_canc',
            'escritor_canc',
            //'cantante_canc',
            //'genero_canc',
            //'id_album',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cancion $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_canc' => $model->id_canc]);
                }
            ],
        ],
    ]); ?>


</div>
