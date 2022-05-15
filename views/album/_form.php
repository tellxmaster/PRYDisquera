<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Banda;
use app\models\Artista;

/* @var $this yii\web\View */
/* @var $model app\models\Album */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="album-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_alb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anio_lanz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_canc_alb')->textInput() ?>

    <?= $form->field($model, 'id_artista')->dropDownList( 
        ArrayHelper::map(Artista::find()->all(),'id_art','apodo_art'),
        ['prompt'=>'Seleccionar... ']
    ) ?>

    <?= $form->field($model, 'id_banda')->dropDownList( 
        ArrayHelper::map(Banda::find()->all(),'id_band','nombre_band'),
        ['prompt'=>'Seleccionar... ']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
