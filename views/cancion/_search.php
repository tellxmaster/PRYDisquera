<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CancionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cancion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_canc') ?>

    <?= $form->field($model, 'nombre_canc') ?>

    <?= $form->field($model, 'duracion_canc') ?>

    <?= $form->field($model, 'anio_lanz_canc') ?>

    <?= $form->field($model, 'escritor_canc') ?>

    <?php // echo $form->field($model, 'cantante_canc') ?>

    <?php // echo $form->field($model, 'genero_canc') ?>

    <?php // echo $form->field($model, 'id_album') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
