<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Artista;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArtistaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artistas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="artista-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Artista', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id_art',
            'nombre_art',
            'apodo_art',
            'fecha_nac_art',
            'id_sello',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Artista $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_art' => $model->id_art]);
                 }
            ],
        ],
    ]); ?>


</div>
