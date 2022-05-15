<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SelloDiscografico */

$this->title = 'Update Sello Discografico: ' . $model->id_sello;
$this->params['breadcrumbs'][] = ['label' => 'Sello Discograficos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sello, 'url' => ['view', 'id_sello' => $model->id_sello]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sello-discografico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
