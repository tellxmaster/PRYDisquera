<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cancion */

$this->title = $model->id_canc;
$this->params['breadcrumbs'][] = ['label' => 'Cancions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cancion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_canc' => $model->id_canc], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_canc' => $model->id_canc], [
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
            'id_canc',
            'nombre_canc',
            'duracion_canc',
            'anio_lanz_canc',
            'escritor_canc',
            'cantante_canc',
            'genero_canc',
            'id_album',
        ],
    ]) ?>

</div>
