<?php

/** @var $this yii\web\View
 *  @var $article Article
 */

use app\models\Article;

$this->title = $article->title;
?>

<div class="special-offer-page">
    <div class="special-offer-page__img">
        <img src="<?= $article->getImage(); ?>" alt="<?= $article->title; ?>">
        <div class="special-offer-page__title">
            <h1><?= $article->title; ?></h1>
        </div>
    </div>
    <div class="special-offer-page__container">

        <?= $article->description; ?>

        <div class="clr"></div>

        <section class="special-offer-page__otherOpinions otherOpinions">
            <h3 class="otherOpinions__h3 h3">Другие пользователи об этом месте</h3>
            <article class="opinion">
                <img class="opinion__img" src="/images/icon_user.png" alt="icon">
                <a class="opinion__name" href="">Пётр</a>
                <time class="opinion__date" datetime="2017-04-13">, 5 мая 2017 года</time>
                <div class="clr"></div>
                <p class="opinion__p p">
                    Персонал приятный, место красивое, понравилось
                </p>
            </article>
            <img src="/images/line.jpg" alt="">
            <article class="opinion">
                <img class="opinion__img" src="/images/icon_user.png" alt="icon">
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
        <img src="/images/advertisement.jpg" alt="advertisement">
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
