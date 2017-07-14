<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PlacesData */

$this->title = 'Update Places Data: ' . $model->places_id;
$this->params['breadcrumbs'][] = ['label' => 'Places Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->places_id, 'url' => ['view', 'id' => $model->places_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="places-data-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
