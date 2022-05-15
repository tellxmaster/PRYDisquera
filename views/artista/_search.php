<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArtistaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="artista-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_art') ?>

    <?= $form->field($model, 'nombre_art') ?>

    <?= $form->field($model, 'apodo_art') ?>

    <?= $form->field($model, 'fecha_nac_art') ?>

    <?= $form->field($model, 'id_sello') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
