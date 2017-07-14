<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlacesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Places Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="places-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Places Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'places_id',
            'places_header',
            'places_body',
            'places_tags',
            'places_rating',
            'user_id',
            // 'places_type_id',
            // 'places_location_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
