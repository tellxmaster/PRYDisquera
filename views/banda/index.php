<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Banda;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BandaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bandas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banda-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Banda', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id_band',
            'nombre_band',
            'miembros',
            'fecha_crea_band',
            'id_sello',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Banda $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_band' => $model->id_band]);
                 }
            ],
        ],
    ]); ?>


</div>
