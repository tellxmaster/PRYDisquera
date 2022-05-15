<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Artista */

$this->title = 'Update Artista: ' . $model->id_art;
$this->params['breadcrumbs'][] = ['label' => 'Artistas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_art, 'url' => ['view', 'id_art' => $model->id_art]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="artista-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
