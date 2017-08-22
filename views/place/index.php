<?php

/** @var $this yii\web\View
 * @var $place Place
 */

use app\models\Place;
use yii\helpers\StringHelper;
use yii\helpers\Url;

$this->title = 'Places';
?>

<div class="main-page">
    <div class="main-page__container container">
        <p class="p main-page__p main-page__p_main-description">
            ГдеКлюет.рф - сервис для поиска места для рыбалки. Здесь вы можете узнать,
            где порыбачить в окрестностях, что можно поймать и на какую снасть,
            есть ли подходящий подъезд к воде.
        </p>
        <section class="main-page__special-offer special-offer">
            <h3 class="special-offer__h3 h3">Места для рыбалки</h3>
            <?php foreach ($places as $place) { ?>
                <div class="special-offer__offer offer">
                    <img src="<?= $place->getImage(); ?>" alt="" class="offer__img" width="200">
                    <h5><a href="<?= Url::toRoute(['place/view', 'id' => $place->id]); ?>" class="offer__title"><?= $place->title; ?></a></h5>
                    <p class="offer__p">
                        <?= StringHelper::truncate($place->description, 120, '...') ?>
                    </p>
                </div>
            <?php } ?>
            <?php
            //TODO: вот тут должны быть какие-то отличия между обычными и платными наверн причём у них еще и пагинации разные будут.
            foreach ($places_free as $place) { ?>
                <div class="special-offer__offer offer">
                    <img src="<?= $place->getImage(); ?>" alt="" class="offer__img" width="200">
                    <h5><a href="<?= Url::toRoute(['place/free', 'id' => $place->id]); ?>" class="offer__title"><?= $place->title; ?></a></h5>
                    <p class="offer__p">
                        <?= StringHelper::truncate($place->description, 120, '...') ?>
                    </p>
                </div>
            <?php } ?>
        </section>
    </div>
</div>
