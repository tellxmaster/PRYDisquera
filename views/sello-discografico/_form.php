<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SelloDiscografico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sello-discografico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_sello')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion_sello')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
