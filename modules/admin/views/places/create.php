<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PlacesData */

$this->title = 'Create Places Data';
$this->params['breadcrumbs'][] = ['label' => 'Places Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="places-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
