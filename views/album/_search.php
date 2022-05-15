<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlbumSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="album-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_alb') ?>

    <?= $form->field($model, 'nombre_alb') ?>

    <?= $form->field($model, 'anio_lanz') ?>

    <?= $form->field($model, 'num_canc_alb') ?>

    <?= $form->field($model, 'id_artista') ?>

    <?php // echo $form->field($model, 'id_banda') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
