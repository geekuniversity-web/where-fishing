<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Signup */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="regPage">
    <?php $form = ActiveForm::begin(['id' => 'form-signup', 'options' => [
        'class' => 'reg-form'
    ]]); ?>
    <h2 class="reg-form__h2">Регистрация</h2>
    <p class="reg-form__p reg-form__label">
        Регистрация позволит Вам оставлять на сайте сообщения, оценивать и добавлять места,
        а также получать скидки при покупке или заказе услуг у наших партнёров.
    </p>
    <div class="reg-form__cont">
        <?= $form->field($model, 'username')->textInput(
            ['class' => 'reg-form__input', 'id' => 'username'])
            ->label('Логин', ['class' => 'reg-form__label']) ?>
        <p class="reg-form__login-label">
            Логин может содержать русские и английские буквы, цифры и пробелы.
            Будет выводиться на сайте
        </p>
    </div>
    <div class="reg-form__cont">
        <?= $form->field($model, 'email')->input('email', ['class' => 'reg-form__input',
            'id' => 'email'])
            ->label('Адрес электронной почты', ['class' => 'reg-form__label']) ?>
    </div>
    <div class="clr"></div>
    <div class="reg-form__cont">
        <?= $form->field($model, 'password')->input('password', ['class' => 'reg-form__input',
            'id' => 'password'])
            ->label('Пароль', ['class' => 'reg-form__label'])
        ?>
    </div>
    <div class="reg-form__cont">
        <?= $form->field($model, 'password_repeat')->input('password', ['class' => 'reg-form__input',
            'id' => 'password_repeat'])
            ->label('Пароль еще раз', ['class' => 'reg-form__label'])
        ?>
    </div>
    <div class="clr"></div>

    <p class="reg-form__label reg-form__label_final">Все поля являются обязательными для заполнения</p>
    <?= Html::submitButton('Зарегистрироваться', ['class' => 'reg-form__submit', 'name' => 'signup-button']) ?>

    <?php ActiveForm::end(); ?>
</div>
<div class="regPage__bg-reg"></div>

<div class="regPage">
    <form action="" class="reg-form">
        <h2 class="reg-form__h2">Регистрация</h2>
        <p class="reg-form__p reg-form__label">
            Регистрация позволит Вам оставлять на сайте сообщения, оценивать и добавлять места,
            а также получать скидки при покупке или заказе услуг у наших партнёров.
        </p>
        <div class="reg-form__cont">
            <label for="reg-form-login" class="reg-form__label">Логин</label>
            <input type="text" id="reg-form-login" class="reg-form__input">
            <p class="reg-form__login-label">
                Логин может содержать русские и английские буквы, цифры и пробелы.
                Будет выводиться на сайте
            </p>
        </div>
        <div class="reg-form__cont">
            <label for="reg-form-address" class="reg-form__label">Адрес электронной почты</label>
            <input type="email" id="reg-form-address" class="reg-form__input">
        </div>
        <div class="clr"></div>
        <div class="reg-form__cont">
            <label for="reg-form-password" class="reg-form__label">Пароль</label>
            <input type="password" id="reg-form-password" class="reg-form__input">
        </div>
        <div class="reg-form__cont">
            <label for="reg-form-password-again" class="reg-form__label">Пароль ещё раз</label>
            <input type="password" id="reg-form-password-again" class="reg-form__input">
        </div>
        <div class="clr"></div>
        <p class="reg-form__label reg-form__label_final">
            Все поля являются обязательными для заполнения
        </p>
        <input type="submit" value="Зарегистрироваться" class="reg-form__submit">
    </form>
    <div class="regPage__bg-reg"></div>

</div>