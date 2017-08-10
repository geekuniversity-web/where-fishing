<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlaceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="place-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'entrance') ?>

    <?php // echo $form->field($model, 'boot') ?>

    <?php // echo $form->field($model, 'rating') ?>

    <?php // echo $form->field($model, 'price_entry') ?>

    <?php // echo $form->field($model, 'price_rowing_boat') ?>

    <?php // echo $form->field($model, 'price_motor_boat') ?>

    <?php // echo $form->field($model, 'price_rod') ?>

    <?php // echo $form->field($model, 'price_gear') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
