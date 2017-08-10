<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Place */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Places', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="place-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Set Image', ['set-image', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Set Region', ['set-region', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Set Fishes', ['set-fishes', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Set Gears', ['set-gears', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'image',
            'entrance:ntext',
            'boot:ntext',
            'rating',
            'price_entry',
            'price_rowing_boat',
            'price_motor_boat',
            'price_rod',
            'price_gear',
            'region_id',
            'camp',
        ],
    ]) ?>

</div>
