<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\SelloDiscografico;

/* @var $this yii\web\View */
/* @var $model app\models\Banda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_band')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'miembros')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_crea_band')->textInput() ?>

    <?= $form->field($model, 'id_sello')->dropDownList( 
        ArrayHelper::map(SelloDiscografico::find()->all(),'id_sello','nombre_sello'),
        ['prompt'=>'Seleccionar... ']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
