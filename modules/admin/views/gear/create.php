<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gear */

$this->title = 'Create Gear';
$this->params['breadcrumbs'][] = ['label' => 'Gears', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gear-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
