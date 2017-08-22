<?php

/** @var $this yii\web\View
 *  @var $place Place
 *  @var $fish Fish
 *  @var $gear Gear
 *  @var $article Article
 */

use app\models\Article;
use app\models\Fish;
use app\models\Gear;
use app\models\Place;
use yii\helpers\Url;

$this->title = $place->title;
?>


<div class="place-page">
    <div class="place-page__container container">
        <h2 class="place-page__h2">Река Чёрная</h2>
        <a href="" class="place-page__edit-inf">отредактировать информацию о месте</a>
        <p class="place-page__p p">Медленная, мелкая, извилистая река в Ленинградской области. Подходит для ловли
            мелкой рыбы.</p>
        <article class="place-page__article">
            <h4 class="place-page__h4 h4">Что тут клюет</h4>
            <?php if (!empty($fishes)) { foreach ($fishes as $fish)  { ?>
                <a href="#" class="fish">
                    <div class="fish__cont">
                        <img src="<?= $fish->getImage() ?>" alt="<?= $fish->title ?>" class="fish__img"><br>
                    </div>
                    <span class="fish__span"><?= $fish->title; ?></span>
                </a>
            <?php }} ?>
        </article>
        <div class="clr"></div>
        <article class="place-page__article">
            <h4 class="place-page__h4 h4">Какая снасть может пригодиться</h4>
            <p class="place-page__p p">
                <?php if (!empty($gears)) {
                    foreach ($gears as $gear) {
                        echo $gear->title . " ";
                    }
                } ?>
            </p>
        </article>
        <article class="place-page__article">
            <h4 class="place-page__h4 h4">Подъезды к воде</h4>
            <p class="place-page__p p"><?= $place->entrance; ?></p>
        </article>
        <article class="place-page__article">
            <h4 class="place-page__h4 h4">Ловля с лодки</h4>
            <p class="place-page__p p"><?= $place->boot; ?></p>
        </article>
        <section class="place-page__choicePlaces choicePlaces">
            <h3 class="choicePlaces__h3 h3">Возможные места для ловли</h3>
            <div class="choicePlaces__map">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A08f500fbb134cc904c397590741635b4a1278c71fd2ecd33d2cf7008026d6650&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </section>
        <section class="place-page__otherOpinions otherOpinions">
            <h3 class="otherOpinions__h3 h3">Другие пользователи об этом месте</h3>
            <!--Добавление штампа "Комментарий добавлен" выполняется добавлением
            к классу opinion__added класса opinion__added_active-->
            <article class="opinion">
                <? foreach ($comments as $comment) { ?>
                    <article class="opinion">
                        <img class="opinion__img" src="/images/icon_user.png" alt="icon">
                        <a class="opinion__name" href="<?=Yii::$app->homeUrl . 'user/index?id=' . $comment['user_id']?>"><?=$comment['username']?></a>
                        <time class="opinion__date" datetime="2017-04-13">, <?=$comment['date']?></time>
                        <div class="clr"></div>
                        <p class="opinion__p p">
                            <?=$comment['content']?>
                        </p>
                <? } ?>
                <!--Добавление штампа "Комментарий добавлен" выполняется добавлением
            к классу opinion__added класса opinion__added_active-->
                <div class="opinion__added opinion__added_active">
                    Комментарий добавлен!
                </div>
            </article>
            <img src="images/line.jpg" alt="">
            <article class="opinion">
                <img class="opinion__img" src="images/icon_user.png" alt="icon">
                <a class="opinion__name" href="">Максим</a>
                <time class="opinion__date" datetime="2016-08-18">, 18 августа 2016 года</time>
                <div class="clr"></div>
                <p class="opinion__p p">Ловил как-то с моста на а181, пару подлещиков мелких достал,
                    рыбы не богато</p>
                <!--Добавление штампа "Комментарий добавлен" выполняется добавлением
            к классу opinion__added класса opinion__added_active-->
                <div class="opinion__added">
                    Комментарий добавлен!
                </div>
            </article>
            <!--Добавление класса otherOpinions__add-comment_active вставляет кнопку-->
            <button class="otherOpinions__add-comment otherOpinions__add-comment_active">Добавить отзыв</button>
            <!--Добавление класса place-page-form_active вставляет форму-->
            <form action="" class="place-page-form">
                <h4 class="place-page-form__h4">Комментарий для места Река Чёрная</h4>
                <textarea name="" id="" cols="85" rows="10" class="place-page-form__textarea"></textarea>
                <input type="submit" class="place-page-form__submit" value="Добавить комментарий">
                <!--Добавление класса place-page-form__error_active вставляет сообщение об ошибке-->
                <p class="place-page-form__error">
                    Ошибка: <br>
                    &mdash; не заполнен текст комментария
                </p>
            </form>
            <!--Добавление класса comment-wait_active вставляет ожидание добавления комментария-->
            <div class="comment-wait">
                <h4 class="comment-wait__h4">Комментарий для места Река Чёрная</h4>
                <p class="comment-wait__p">Добавление комментария...</p>
            </div>
        </section>
    </div>
    <a href="" class="advertisement">
        <img src="images/advertisement.jpg" alt="advertisement">
    </a>
    <div class="otherPlaces">
        <h4 class="otherPlaces__h4 h4">Другие места поблизости</h4>
        <ul>
            <li class="otherPlaces__li"><a class="otherPlaces__a otherPlaces__a_special" href="specialOffer.html">База Карасёво</a>, 14 км</li>
            <li class="otherPlaces__li"><a class="otherPlaces__a" href="">Озеро Меднозаводский
                    разлив</a>, 3 км</li>
            <li class="otherPlaces__li"><a class="otherPlaces__a" href="">Озеро Большое</a>, 10 км</li>
            <li class="otherPlaces__li"><a class="otherPlaces__a" href="">Озеро Сестрорецкий разлив</a>,
                15 км</li>
            <li class="otherPlaces__li"><a class="otherPlaces__a" href="">Озеро Лахтинский разлив</a>,
                20 км</li>
        </ul>
    </div>
    <div class="popularArticles">
        <h4 class="popularArticles__h4 h4">Популярные статьи</h4>
        <ul>
            <?php foreach ($popular_articles as $article) { ?>
                <li class="popularArticles__li">
                    <a href="<?= Url::toRoute(['article/view', 'id' => $article->id]) ?>" class="popularArticles__a">
                        <?= $article->title; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div class="clr"></div>
</div>