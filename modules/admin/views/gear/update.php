<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gear */

$this->title = 'Update Gear: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Gears', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gear-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
