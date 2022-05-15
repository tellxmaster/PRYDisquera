<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\SelloDiscografico;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SelloDiscograficoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sellos Discograficos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sello-discografico-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Sello Discografico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id_sello',
            'nombre_sello',
            'direccion_sello',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, SelloDiscografico $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_sello' => $model->id_sello]);
                }
            ],
        ],
    ]); ?>


</div>
