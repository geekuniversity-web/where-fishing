<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fish */

$this->title = 'Update Fish: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Fish', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fish-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
