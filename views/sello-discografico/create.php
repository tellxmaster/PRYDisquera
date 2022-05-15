<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SelloDiscografico */

$this->title = 'Crear Sello Discografico';
$this->params['breadcrumbs'][] = ['label' => 'Sello Discograficos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sello-discografico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
