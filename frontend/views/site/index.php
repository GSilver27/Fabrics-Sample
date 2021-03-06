<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'Fabrics';
?>
<main>
    <section class="main__banner">
        <div class="main__banner-outer"></div>
        <div class="banner__inner  wrapper">
            <h1 class="banner__inner-text">
                Скидки 20% на новые ткани
            </h1>

            <div class="banner__inner-controls">
                <div class="banner__inner-progress">
                    <div class="banner__inner-progress_nums">
                        2<span>/4</span>
                    </div>
                    <div class="banner__inner-progress_slide">
                        <div class="banner__inner-progress_slide-current"></div>
                    </div>
                </div>

                <div class="banner__inner-buttons">
                    <div class="banner__inner-buttons_prev">
                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 4.5L5.5 0.5M1.5 4.5L5.5 8.5M1.5 4.5H14" stroke="#FBF7F4"/>
                        </svg>
                    </div>

                    <div class="banner__inner-buttons_next">
                        <svg width="64" height="9" viewBox="0 0 64 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M63.25 4.5L63.6036 4.14645L63.9571 4.5L63.6036 4.85355L63.25 4.5ZM62.8964 4.85355L58.8964 0.853553L59.6036 0.146447L63.6036 4.14645L62.8964 4.85355ZM63.6036 4.85355L59.6036 8.85355L58.8964 8.14645L62.8964 4.14645L63.6036 4.85355ZM63.25 5H0.75V4H63.25V5Z" fill="#BF1E77"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main__discounts wrapper">
        <div class="discounts__container">
            <div class="discounts__card-1">
                <div class="discounts__card-percent">20%</div>
                <div class="discounts__card-text">на новые<br>ткани</div>
            </div>

            <div class="discounts__card-2">
                <div class="discounts__card-percent">15%</div>
                <div class="discounts__card-text">на<br>ткани</div>
            </div>

            <div class="discounts__card-3">
                <div class="discounts__card-percent">6%</div>
                <div class="discounts__card-text">8 марта<br>на ткани</div>
            </div>
        </div>
    </section>

    <section class="main__categories">
        <div class="categories__bg"></div>
        <div class="categories__left-line"></div>
        <div class="categories__container wrapper">
            <div class="categories__text">
                <a href="<?= Url::to(['site/catalog']) ?>"><h2>Популярные категории</h2></a>
            </div>

            <div class="categories__cards">
                <a href="">
                    <div class="categories__cards-1">Лен и полулен</div>
                </a>
                <a href="">
                    <div class="categories__cards-2">Хлопок</div>
                </a>
                <a href="">
                    <div class="categories__cards-3">Вискоза</div>
                </a>
                <a href="">
                    <div class="categories__cards-4">Новогодние ткани</div>
                </a>
                <a href="">
                    <div class="categories__cards-5">Лен и полулен</div>
                </a>
                <a href="">
                    <div class="categories__cards-6">Хлопок</div>
                </a>
                <a href="">
                    <div class="categories__cards-7">
                        Вискоза
                        <svg width="44" height="10" viewBox="0 0 44 10" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M42.5 5L39.78 1M42.5 5L39.78 9M42.5 5H-4.47035e-07" stroke="white"/>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="categories__right-line"></div>
    </section>

    <section class="main__watched wrapper">
        <div class="watched__container">
            <div class="watched__text">
                <h2>Вы просматривали</h2>
            </div>
            <div class="watched__cards">
                <div class="watched__card-1">
                    <div class="card__container-img-1">
                        <a href="">
                            <img class="fav-off" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                        </a>
                    </div>
                    <p class="card__text">Рогожка</p>
                    <a href=""><h4 class="card__name">Альпийская деревенька</h4></a>
                    <p class="card__info-1"><span>Ширина</span>1.5 м</p>
                    <p class="card__info-2"><span>Состав</span>100%</p>
                    <p class="card__info-3"><span>Плотность</span>170 гр/м2</p>
                    <div class="card__divider"></div>
                    <div class="card__buy">
                        <div class="card__buy_price">240 ₽<span>360 ₽</span></div>
                        <div class="card__buy_to-basket"><a href="">В корзину</a></div>
                    </div>
                </div>

                <div class="watched__card-2">
                    <div class="card__container-img-2">
                        <a href="">
                            <img class="fav-on" src="<?= Url::to(['imgs/fav-on.png']) ?>" alt="">
                        </a>
                    </div>
                    <p class="card__text">Рогожка</p>
                    <a href=""><h4 class="card__name">Альпийская деревенька</h4></a>
                    <p class="card__info-1"><span>Ширина</span>1.5 м</p>
                    <p class="card__info-2"><span>Состав</span>100%</p>
                    <p class="card__info-3"><span>Плотность</span>170 гр/м2</p>
                    <div class="card__divider"></div>
                    <div class="card__buy">
                        <div class="card__buy_price">240 ₽<span>360 ₽</span></div>
                        <div class="card__buy_to-basket"><a href="">В корзину</a></div>
                    </div>
                </div>

                <div class="watched__card-3">
                    <div class="card__container-img-3">
                        <a href="">
                            <img class="fav-off" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                        </a>
                    </div>
                    <p class="card__text">Рогожка</p>
                    <a href=""><h4 class="card__name">Альпийская деревенька</h4></a>
                    <p class="card__info-1"><span>Ширина</span>1.5 м</p>
                    <p class="card__info-2"><span>Состав</span>100%</p>
                    <p class="card__info-3"><span>Плотность</span>170 гр/м2</p>
                    <div class="card__divider"></div>
                    <div class="card__buy">
                        <div class="card__buy_price">240 ₽<span>360 ₽</span></div>
                        <div class="card__buy_to-basket"><a href="">В корзину</a></div>
                    </div>
                </div>
            </div>
    </section>
</main>
