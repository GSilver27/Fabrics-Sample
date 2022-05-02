<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="">
    <?php $this->beginBody() ?>

    <header>
        <div class="wrapper">
            <div class="header__outer">
                <div class="header__inner">
                    <div class="header__item header__main-text main-text-fz color-main">
                        ТКАНИ
                    </div>

                    <div class="header__item">
                        <div class="header__item-location">
                            <img src="<?= Url::to(['imgs/location.svg']) ?>" alt="">Санкт-Петербург
                        </div>
                    </div>

                    <div class="header__item">
                        <div class="header__item-search">
                            <input type="text" placeholder="Я ищу...">
                        </div>
                    </div>

                    <div class="header__item">
                        <div class="header__item-num-info">
                            8 800 900 70 90
                            <div class="header__work-time">
                                Пн-вс: 10:00 - 21:00
                            </div>
                        </div>
                    </div>

                    <div class="header__item">
                        <div class="header__icons">
                            <div class="header__icons-favorites">
                                <a href=""><img src="<?= Url::to(['imgs/favorites.svg']) ?>" alt=""></a>
                            </div>
                            <div class="header__icons-separator"></div>
                            <div class="header__icons-account">
                                <a href=""><img src="<?= Url::to(['imgs/account.svg']) ?>" alt=""></a>
                            </div>
                            <div class="header__icons-basket">
                                <a href=""><img src="<?= Url::to(['imgs/basket.svg']) ?>" alt="">12</a>
                            </div>
                        </div>
                    </div>
                </div>

                <nav>
                    <div class="current-paige">Для одежды</div>
                    <a href="">Для интерьера</a>
                    <a href="">Мебельные</a>
                    <a href="">Фурнитура</a>
                    <a href="">Пряжа</a>
                    <a href="">Новогодние</a>
                    <a href="">Для шитья</a>
                </nav>
            </div>
        </div>
    </header>

    <main role="main" class="">
        <?= $content ?>
    </main>

    <footer>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
