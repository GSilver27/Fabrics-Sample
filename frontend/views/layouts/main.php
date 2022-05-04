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
        <div class="footer__bg"></div>
        <div class="footer__side-line"></div>
        <div class="wrapper">
            <div class="footer__banner">
                <div class="banner__text">
                    <div class="banner__text-main">Подпишитесь на рассылку</div>
                    <div class="banner__text-sub">Будьте в курсе наших акций</div>
                </div>

                <div class="banner__email">
                    <div class="banner__email-main">
                        <input class="banner__email-input" type="email" placeholder="Ваша почта">
                        <button class="banner__email-btn">
                            Подписаться
                            <svg width="44" height="10" viewBox="0 0 44 10" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M43 5L43.4135 4.71884L43.6046 5L43.4135 5.28116L43 5ZM42.5865 5.28116L39.8665 1.28116L40.6935 0.718845L43.4135 4.71884L42.5865 5.28116ZM43.4135 5.28116L40.6935 9.28115L39.8665 8.71884L42.5865 4.71884L43.4135 5.28116ZM43 5.5H0.5V4.5H43V5.5Z"
                                      fill="white"/>
                            </svg>
                        </button>
                    </div>

                    <div class="banner__email-info">
                        Нажимая кнопку, вы даете согласие на обработку ваших персональных данных в соответствии с
                        Политикой Конфиденциальности
                    </div>
                </div>
            </div>

            <div class="footer__columns">
                <div class="footer_column-contacts">
                    <div class="column-contacts__info">
                        <h5>Наши контакты</h5>
                        <div>8 800 900 70 90</div>
                        <div>г. Орск Проспект Ленина 71 / А</div>
                        <div>Пн-вс: 10:00 - 21:00<br>без выходных</div>
                    </div>

                    <div class="column-contacts__socials">
                        <a href="" title="Instagram">
                            <img src="<?= Url::to(['imgs/instagram.png']) ?>" alt="instagram-logo">
                        </a>
                        <a href="" title="VK">
                            <img src="<?= Url::to(['imgs/vk.png']) ?>" alt="vk-logo">
                        </a>
                    </div>

                    <div class="column-contacts__politics">Политика конфиденциальности</div>
                </div>

                <div class="footer__divider"></div>

                <div class="footer_column-sections">
                    <h5>Разделы</h5>
                    <div>Для одежды</div>
                    <div>Для интерьера</div>
                    <div>Мебельные</div>
                    <div>Фурнитура</div>
                    <div>Пряжа</div>
                    <div>Новогодние</div>
                    <div>Для шитья</div>
                </div>

                <div class="footer__divider"></div>

                <div class="footer_column-payments">
                    <div class="column-payments__info">
                        <h5>Способы оплаты</h5>
                        <a href="" title="VISA">
                            <img src="<?= Url::to(['imgs/Visa.png']) ?>" alt="VISA">
                        </a>
                        <a href="" title="PayPal">
                            <img src="<?= Url::to(['imgs/PayPal.png']) ?>" alt="PayPal">
                        </a>
                        <a href="" title="MasterCard">
                            <img src="<?= Url::to(['imgs/MasterCard.png']) ?>" alt="MasterCard">
                        </a>
                    </div>

                    <div class="column-payments__rights">Все права защищены (С)</div>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
