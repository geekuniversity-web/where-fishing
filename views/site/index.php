<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Main';
?>

<div class="main-page">
    <div class="main-page__container container">
        <p class="p main-page__p main-page__p_main-description">
            ГдеКлюет.рф - сервис для поиска места для рыбалки. Здесь вы можете узнать,
            где порыбачить в окрестностях, что можно поймать и на какую снасть,
            есть ли подходящий подъезд к воде.
        </p>
        <form action="" class="main-page__form-main form-main">
            <div class="form-main__cont">
                <label for="main-input-place-name" class="form-main__label">
                    Название места, в окрестности которого хотите рыбачить
                </label>
                <br>
                <input type="text" class="form-main__input form-main__input_place" name="place-name"
                       id="main-input-place-name" placeholder="название населённого пункта или водоёма">
                <a href="" class="form-main__a form-main__a_place">Санкт-Петербург и Ленобласть</a>
            </div>
            <div class="form-main__cont">
                <label for="main-select-fish" class="form-main__label">
                    Какая рыба интересует
                </label>
                <br>
                <?= Html::dropDownList('fishes', [], $fishes, [
                        'id' => 'main-select-fish',
                        'class'=>'form-main__select_fish',
                        'placeholder' => 'любая',
                        'data-jcf' => '{
                            "wrapNative": false,
                            "wrapNativeOnMobile": false,
                            "useCustomScroll": false,
                            "multipleCompactStyle": true
                        }',
                        'multiple' => true
                ]) ?>
            </div>
            <div class="form-main__cont">
                <label for="main-select-tackle" class="form-main__label">
                    На какую снасть хотите ловить
                </label>
                <br>
                <?= Html::dropDownList('gears', [], $gears, [
                    'id' => 'main-select-tackle',
                    'class'=>'form-main__select_tackle',
                    'placeholder' => 'неважно',
                    'data-jcf' => '{
                        "wrapNative": false, 
                        "wrapNativeOnMobile": false,
                        "useCustomScroll": false, 
                        "multipleCompactStyle": true
                    }',
                    'multiple' => true
                ]) ?>
            </div>
            <div class="form-main__cont form-main__cont_checkbox">
                <input type="checkbox" class="form-main__checkbox" id="form-main-checkbox">
                <label class="form-main__checkbox-label" for="form-main-checkbox">хочу ловить с лодки</label>
            </div>
            <input type="submit" class="form-main__input form-main__input_submit" value="Найти">
            <a href="" class="form-main__a form-main__a_best-places">Лучшие места</a>
            <div class="form-main__special-offer">
                <img class="form-main__img" src="/images/special_offer.png" alt="">
                <a href="" class="form-main__a form-main__a_offer">Специальные предложения</a>
            </div>
            <div class="clr"></div>
        </form>
        <section class="main-page__special-offer special-offer">
            <h3 class="special-offer__h3 h3">Специальные предложения</h3>
            <div href="" class="special-offer__offer offer">
                <img src="/images/dubki.jpg" alt="" class="offer__img">
                <h5><a href="" class="offer__title">Рыболовная база &laquo;Дубки&raquo;</a></h5>
                <p class="offer__p">
                    Гостиница в тихом месте, аренда лодки
                </p>
            </div>
            <div href="" class="special-offer__offer offer">
                <img src="/images/vantolovo.jpg" alt="" class="offer__img">
                <h5><a href="" class="offer__title">Гостиница в Вантолово</a></h5>
                <p class="offer__p">
                    Всё, что нужно рыболову
                </p>
            </div>
            <div href="" class="special-offer__offer offer">
                <img src="/images/Leska_i_nazgivka.jpg" alt="" class="offer__img">
                <h5><a href="" class="offer__title">База &laquo;Леска и наживка&raquo;</a></h5>
                <p class="offer__p">
                    Рыбалка - это модно
                </p>
            </div>
        </section>
    </div>
    <a href="" class="advertisement">
        <img src="/images/advertisement.jpg" alt="advertisement">
    </a>
    <div class="clr"></div>
    <div class="main-page__new-articles new-articles">
        <h3 class="new-articles__h3 h3">Свежие статьи</h3>
        <div class="main-page__article article">
            <img src="/images/artile_1.jpg" alt="" class="article__img">
            <h4>
                <a href="" class="article__title">
                    Фоторыбалка: какой фотоаппарат взять с собой
                </a>
            </h4>
            <p class="article__p">
                Может показаться, что рыбалка - занятие не особенно зрелищное.
                Но если взять с собой правильную фотокамеру и следовать нескольким советам,
                можно...
            </p>
        </div>
        <div class="main-page__article article">
            <img src="/images/artile_2.jpg" alt="" class="article__img">
            <h4>
                <a href="" class="article__title">
                    Имеет ли смысл рыбачить в городе
                </a>
            </h4>
            <p class="article__p">
                Многие рыбаки даже не пробуют рыбачить в городе, полагая, что это дело гиблое.
                Вот что об этом думают наши собеседники.
            </p>
        </div>
    </div>
    <div class="main-page__forum-popular forum-popular">
        <h3 class="forum-popular__h3 h3">Популярное на форуме</h3>
        <article class="forum-popular__forum-theme forum-theme">
            <h4>
                <a href="" class="forum-theme__title">
                    Как я рыбачил в приозёрске
                </a>
            </h4>
            <img src="/images/icon_user.png" alt="" class="forum-theme__img">
            <span class="forum-theme__inf">craver145 | 12 сообщений в теме за последнюю неделю</span>
        </article>
        <br>
        <br>
        <article class="forum-popular__forum-theme forum-theme">
            <h4>
                <a href="" class="forum-theme__title">
                    я девушка и хочу рыбачить) с чего начать
                </a>
            </h4>
            <img src="/images/icon_user.png" alt="" class="forum-theme__img">
            <span class="forum-theme__inf">Natalia_ | 10 сообщений в теме за последнюю неделю</span>
        </article>
        <br>
        <br>
        <article class="forum-popular__forum-theme forum-theme">
            <h4>
                <a href="" class="forum-theme__title">
                    Некоторые мысли про ловлю карпа
                </a>
            </h4>
            <img src="/images/icon_user.png" alt="" class="forum-theme__img">
            <span class="forum-theme__inf">Иван Полинов | 5 сообщений в теме за последнюю неделю</span>
        </article>
        <br>
        <br>
        <article class="forum-popular__forum-theme forum-theme">
            <h4>
                <a href="" class="forum-theme__title">
                    Как я удил в Ивангороде
                </a>
            </h4>
            <img src="/images/icon_user.png" alt="" class="forum-theme__img">
            <span class="forum-theme__inf">Бугров | 4 сообщений за последнюю неделю</span>
        </article>
    </div>
    <div class="clr"></div>
</div>
