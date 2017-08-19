<?php

/* @var $this View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\web\View;
use yii\widgets\Breadcrumbs;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header">
    <a class="header__logo logo" href="<?= Yii::$app->homeUrl; ?>">Где клюет<span class="logo__span">.рф</span></a>
    <nav class="header__nav nav">
        <ul class="nav__ul">
            <li class="nav__li"><a class="nav__a" href="/place/index">Места</a></li>
            <li class="nav__li"><a class="nav__a" href="">Поездки</a></li>
            <li class="nav__li"><a class="nav__a" href="">Форум</a></li>
            <li class="nav__li"><a class="nav__a" href="/article/index">Статьи</a></li>
        </ul>
    </nav>

    <?php if (Yii::$app->user->isGuest) { ?>
        <!--Случай неавторизованного пользователя (переключение через добавление класса header-auth_active)-->
        <div class="header__header-auth header-auth header-auth_active">
            <div class="header-auth__login">
                <div class="header-auth__login-text">Вход</div>
                <form class="header-auth__sign-in sign-in" action="<?=\yii\helpers\Url::home(true) . 'site/login' ?>" method="post">
                    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
                    <label for="header-sign-in-login" class="sign-in__label">Логин</label>
                    <br>
                    <input id="header-sign-in-login" type="text" class="sign-in__input" name="Login[username]">
                    <br>
                    <label for="header-sign-in-password" class="sign-in__label">Пароль</label>
                    <br>
                    <input id="header-sign-in-password" type="password" class="sign-in__input" name="Login[password]">
                    <br>
                    <input type="hidden" name="Login[rememberMe]" value="0">
                    <input id="header-sign-in-checkbox" type="checkbox" class="sign-in__checkbox" name="Login[rememberMe]">
                    <label for="header-sign-in-checkbox">Запомнить меня</label>
                    <br>
                    <input type="submit" class="sign-in__submit" value="Войти">
                </form>
            </div>
            <br>
            <!--Если есть класс header-auth__registration_del пункт "Регистрация" не отображается-->
            <a href="" class="header-auth__registration">Регистрация</a>
        </div>
    <?php } else { ?>
        <!--Случай авторизованного пользователя (переключение через добавление класса header-auth_active)-->
        <div class="header__header-auth header-auth header-auth_active">
            <div class="header__cont">
                <div class="header-auth__name"><?= Yii::$app->user->identity->username ?></div>
                <ul class="header-auth__panel">
                    <li class="header-auth__li"><a href="" class="header-auth__profile">профиль</a></li>
                    <!--Появление второго элемента li осуществляется добавлением в него класса -->
                    <li class="header-auth__li header-auth__li_admin"><a href="" class="header-auth__control">управление</a></li>
                    <li class="header-auth__li"><a href="/site/logout" class="header-auth__logout">выйти</a></li>
                </ul>
            </div>
            <div class="header-auth__avatar avatar">
                <img src="/images/icon_user.png" alt="" class="avatar__img">
            </div>
        </div>
    <?php } ?>
</header>

<?= $content ?>

<?php $this->endBody() ?>
<?php //$this->registerJsFile('/ckeditor/ckeditor.js');?>
<?php $this->registerJs('
        $(function() {
            jcf.replaceAll();
        });', View::POS_READY);?>
<!--<script>
    $(document).ready(function(){
        var editor = CKEDITOR.replaceAll();

    })
</script>-->
</body>
</html>
<?php $this->endPage() ?>
