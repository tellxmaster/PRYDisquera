<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SelloDiscografico */

$this->title = $model->id_sello;
$this->params['breadcrumbs'][] = ['label' => 'Sello Discograficos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sello-discografico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_sello' => $model->id_sello], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_sello' => $model->id_sello], [
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
            'id_sello',
            'nombre_sello',
            'direccion_sello',
        ],
    ]) ?>

</div>
