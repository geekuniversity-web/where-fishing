<?php

/** @var $this yii\web\View
 *  @var $place Place
 *  @var $fish Fish
 *  @var $gear Gear
 */

use app\models\Fish;
use app\models\Gear;
use app\models\Place;

$this->title = $place->title;
?>

<div class="special-offer-page">
    <div class="special-offer-page__img">
        <div class="special-offer-page__title">
            <h1><?= $place->title; ?></h1>
        </div>
    </div>
    <div class="special-offer-page__container">

        <?= $place->description; ?>

        <article class="special-offer-page__article">
            <h4 class="h4">Что тут клюет</h4>
            <?php if (!empty($fishes)) { foreach ($fishes as $fish)  { ?>
                <a href="#" class="fish fish_okun">
                    <img src="<?= $fish->getImage() ?>" alt="<?= $fish->title ?>" class="fish__img"><br>
                    <span class="fish__span"><?= $fish->title; ?></span>
                </a>
            <?php }} ?>
        </article>
        <div class="clr"></div>
        <article class="special-offer-page__article">
            <h4 class="h4">Какая снасть может пригодиться</h4>
            <p class="special-offer-page__p p">
                <?php if (!empty($gears)) {
                    foreach ($gears as $gear) {
                        echo $gear->title . " ";
                    }
                } ?>
            </p>
        </article>
        <article class="special-offer-page__article">
            <h4 class="h4">Подъезды к воде</h4>
            <p class="special-offer-page__p p"><?= $place->entrance; ?></p>
        </article>
        <article class="special-offer-page__article">
            <h4 class="h4">Ловля с лодки</h4>
            <p class="special-offer-page__p p"><?= $place->boot; ?></p>
        </article>
        <section class="special-offer-page__prices prices">
            <h3 class="h3">Цены</h3>
            <table class="prices__table">
                <tr class="prices__tr">
                    <th>Услуга</th>
                    <th>Цена</th>
                </tr>
                <tr class="prices__tr prices__tr_grey">
                    <td>Въезд на территорию базы</td>
                    <td><?= $place->price_entry; ?> ₽ с человека</td>
                </tr>
                <tr class="prices__tr">
                    <td>Прокат вёсельной лодки</td>
                    <td><?= $place->price_rowing_boat; ?> ₽ в час</td>
                </tr>
                <tr class="prices__tr prices__tr_grey">
                    <td>Прокат моторной лодки</td>
                    <td><?= $place->price_motor_boat; ?> ₽ в час</td>
                </tr>
                <tr class="prices__tr">
                    <td colspan="2">Прокат снасти</td>
                </tr>
                <tr class="prices__tr prices__tr_grey">
                    <td class="tackle-rent__td">спиннинг</td>
                    <td><?= $place->price_rod; ?> ₽</td>
                </tr>
                <tr class="prices__tr">
                    <td class="tackle-rent__td">блесны, воблеры, попперы</td>
                    <td><?= $place->price_gear; ?> ₽</td>
                </tr>
            </table>
        </section>
        <section class="special-offer-page__photogalery photogalery">
            <h3 class="h3">Фотогалерея</h3>
            <div class="photogalery__photo">
                <img src="images/arrow.png" alt="" class="photogalery__arrow">
            </div>
        </section>
        <section class="special-offer-page__otherOpinions otherOpinions">
            <h3 class="otherOpinions__h3 h3">Другие пользователи об этом месте</h3>
            <article class="opinion">
                <img class="opinion__img" src="images/icon_user.png" alt="icon">
                <a class="opinion__name" href="">Пётр</a>
                <time class="opinion__date" datetime="2017-04-13">, 5 мая 2017 года</time>
                <div class="clr"></div>
                <p class="opinion__p p">
                    Персонал приятный, место красивое, понравилось
                </p>
            </article>
            <img src="images/line.jpg" alt="">
            <article class="opinion">
                <img class="opinion__img" src="images/icon_user.png" alt="icon">
                <a class="opinion__name" href="">Ильдар Витин</a>
                <time class="opinion__date" datetime="2016-08-18">, 2 марта 2017 года</time>
                <div class="clr"></div>
                <p class="opinion__p p">
                    Не понравилось на базе, недружелюбный персонал, заплатил за снасть,
                    потом управляющий куда-то пропал минут на 40, пришлось самому ходить искать.
                    Но природа вокруг хорошая, ничего не скажу.
                </p>
            </article>
        </section>
    </div>
    <a href="" class="advertisement">
        <img src="images/advertisement.jpg" alt="advertisement">
    </a>
    <div class="place-in-map">
        <h4 class="place-in-map__h4 h4">Место на карте</h4>
        <div class="place-in-map__map">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A08f500fbb134cc904c397590741635b4a1278c71fd2ecd33d2cf7008026d6650&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>
    <div class="otherPlaces">
        <h4 class="otherPlaces__h4 h4">Другие места поблизости</h4>
        <ul>
            <li class="otherPlaces__li"><a class="otherPlaces__a" href="">Озеро Меднозаводский
                    разлив</a>, 3 км
            </li>
            <li class="otherPlaces__li"><a class="otherPlaces__a" href="">Озеро Большое</a>, 10 км</li>
            <li class="otherPlaces__li"><a class="otherPlaces__a" href="">Озеро Сестрорецкий разлив</a>,
                15 км
            </li>
            <li class="otherPlaces__li"><a class="otherPlaces__a" href="">Озеро Лахтинский разлив</a>,
                20 км
            </li>
        </ul>
    </div>
    <div class="popularArticles">
        <h4 class="popularArticles__h4 h4">Популярные статьи</h4>
        <ul>
            <li class="popularArticles__li"><a href="" class="popularArticles__a">Фоторыбалка: какой
                    фотоаппарат взять с собой</a></li>
            <li class="popularArticles__li"><a href="" class="popularArticles__a">Имеет ли смысл рыбачить
                    в городе</a></li>
            <li class="popularArticles__li"><a href="" class="popularArticles__a">В Сестрорецком разливе
                    построят лососёвую ферму</a></li>
        </ul>
    </div>
    <div class="clr"></div>
</div>
