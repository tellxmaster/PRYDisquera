<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Album;

/* @var $this yii\web\View */
/* @var $model app\models\Cancion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cancion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_canc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duracion_canc')->textInput() ?>

    <?= $form->field($model, 'anio_lanz_canc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'escritor_canc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantante_canc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero_canc')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'id_album')->dropDownList( 
        ArrayHelper::map(Album::find()->all(),'id_alb','nombre_alb'),
        ['prompt'=>'Seleccionar... ']
    ) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
