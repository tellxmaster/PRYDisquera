<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cancion */

$this->title = 'Update Cancion: ' . $model->id_canc;
$this->params['breadcrumbs'][] = ['label' => 'Cancions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_canc, 'url' => ['view', 'id_canc' => $model->id_canc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cancion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
