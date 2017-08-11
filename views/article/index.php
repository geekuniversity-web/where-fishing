<?php

/** @var $this yii\web\View
 * @var $article Article
 */

use app\models\Article;
use yii\helpers\StringHelper;
use yii\helpers\Url;

$this->title = 'Articles';
?>

<div class="main-page">
    <div class="main-page__container container">
        <p class="p main-page__p main-page__p_main-description">
            ГдеКлюет.рф - сервис для поиска места для рыбалки. Здесь вы можете узнать,
            где порыбачить в окрестностях, что можно поймать и на какую снасть,
            есть ли подходящий подъезд к воде.
        </p>
        <section class="main-page__special-offer special-offer">
            <h3 class="special-offer__h3 h3">Статьи</h3>
            <?php foreach ($articles as $article) { ?>
                <div class="special-offer__offer offer">
                    <img src="<?= $article->getImage(); ?>" alt="" class="offer__img" width="200">
                    <h5><a href="<?= Url::toRoute(['article/view', 'id' => $article->id]); ?>" class="offer__title"><?= $article->title; ?></a></h5>
                    <p class="offer__p">
                        <?= StringHelper::truncate($article->description, 120, '...') ?>
                    </p>
                </div>
            <?php } ?>
        </section>
    </div>
</div>
