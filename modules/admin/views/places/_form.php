<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Places */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="places-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'places_id')->textInput() ?>

    <?= $form->field($model, 'places_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'places_body')->textInput() ?>

    <?= $form->field($model, 'places_tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'places_rating')->textInput() ?>

    <?= $form->field($model, 'places_type_id')->textInput() ?>

    <?= $form->field($model, 'places_location_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
