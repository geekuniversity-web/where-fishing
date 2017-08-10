<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
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
            <li class="nav__li"><a class="nav__a" href="placePage.html">Места</a></li>
            <li class="nav__li"><a class="nav__a" href="">Поездки</a></li>
            <li class="nav__li"><a class="nav__a" href="">Форум</a></li>
            <li class="nav__li"><a class="nav__a" href="">Статьи</a></li>
        </ul>
    </nav>

    <?php if (Yii::$app->user->isGuest) { ?>
        <!--Случай неавторизованного пользователя (переключение через добавление класса header-auth_active)-->
        <div class="header__header-auth header-auth header-auth_active">
            <a href="/site/login" class="header-auth__login">Вход</a>
            <br>
            <a href="/site/signup" class="header-auth__registration">Регистрация</a>
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
                <img src="images/icon_user.png" alt="" class="avatar__img">
            </div>
        </div>
    <?php } ?>
</header>

<?= $content ?>

<?php $this->endBody() ?>
<?php $this->registerJsFile('/ckeditor/ckeditor.js');?>
<?php $this->registerJs('
        $(function() {
            jcf.replaceAll();
        });');?>
<script>
    $(document).ready(function(){
        var editor = CKEDITOR.replaceAll();
    })
</script>
</body>
</html>
<?php $this->endPage() ?>
