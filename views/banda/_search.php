<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BandaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_band') ?>

    <?= $form->field($model, 'nombre_band') ?>

    <?= $form->field($model, 'miembros') ?>

    <?= $form->field($model, 'fecha_crea_band') ?>

    <?= $form->field($model, 'id_sello') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
