<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Place */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="place-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'camp')->checkbox(); ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'entrance')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'boot')->textarea(['rows' => 6]) ?>

    <?php if ($model->camp)  { ?>
        <?= $form->field($model, 'price_entry')->textInput() ?>

        <?= $form->field($model, 'price_rowing_boat')->textInput() ?>

        <?= $form->field($model, 'price_motor_boat')->textInput() ?>

        <?= $form->field($model, 'price_rod')->textInput() ?>

        <?= $form->field($model, 'price_gear')->textInput() ?>
    <?php } ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
