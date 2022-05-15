<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Banda */

$this->title = 'Update Banda: ' . $model->id_band;
$this->params['breadcrumbs'][] = ['label' => 'Bandas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_band, 'url' => ['view', 'id_band' => $model->id_band]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="banda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
