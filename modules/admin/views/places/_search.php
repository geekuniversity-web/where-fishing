<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlacesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="places-data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'places_id') ?>

    <?= $form->field($model, 'places_header') ?>

    <?= $form->field($model, 'places_body') ?>

    <?= $form->field($model, 'places_tags') ?>

    <?= $form->field($model, 'places_rating') ?>

    <?php // echo $form->field($model, 'places_type_id') ?>

    <?php // echo $form->field($model, 'places_location_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
