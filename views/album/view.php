<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Album */

$this->title = $model->id_alb;
$this->params['breadcrumbs'][] = ['label' => 'Albums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="album-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_alb' => $model->id_alb], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_alb' => $model->id_alb], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_alb',
            'nombre_alb',
            'anio_lanz',
            'num_canc_alb',
            'id_artista',
            'id_banda',
        ],
    ]) ?>

</div>
