<?php
/** @var yii\web\View $this */

use yii\helpers\url;

use frontend\assets\AppAsset;
AppAsset::register($this);
$this->title = 'Каталог';
?>
<main>
    <section class="breadcrumbs">
        <div class="breadcrumbs-bg"></div>
        <div class="breadcrumbs-inner wrapper">
            <img src="<?= Url::to(['imgs/home.png']) ?>" alt="">
            <a href="<?= Url::to(['site/']) ?>">Главная</a> <span class="breadcrumbs__b-slash">\</span> <span class="breadcrumbs__last">Каталог товаров</span>
        </div>
    </section>

    <section class="catalog wrapper">
        <div class="catalog__sidebar">
            <div class="catalog__selection">
                <h2>каталог</h2>
                <div class="selection__cards">
                    <a href="">
                        <div class="selection__materials-1">Лен и полулен</div>
                    </a>
                    <a href="">
                        <div class="selection__materials-2">Хлопок</div>
                    </a>
                    <a href="">
                        <div class="selection__materials-3">Вискоза</div>
                    </a>
                    <a href="">
                        <div class="selection__materials-4">Новогодние ткани</div>
                    </a>
                    <a href="">
                        <div class="selection__materials-5">Лен и полулен</div>
                    </a>
                    <a href="">
                        <div class="selection__materials-6">Хлопок</div>
                    </a>
                    <a href="">
                        <div class="selection__materials-7">Вискоза</div>
                    </a>
                </div>
            </div>

            <div class="catalog__filters">
                <h4>Фильтры</h4>
                <div class="catalog__divider"></div>
            </div>
        </div>

        <div class="catalog__products">
            <div class="catalog__sort">
                <div class="catalog__sort-newest">
                    <a href="">
                        По новизне
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66672 11.3901V0.332909H5.33338V11.3901L1.13812 7.19484L0.195312 8.13765L6.00005 13.9424L11.8048 8.13765L10.862 7.19484L6.66672 11.3901Z" fill="#BF1E77"/>
                        </svg>
                    </a>
                </div>
                <div class="catalog__sort_price">
                    <a href="">
                        По стоимости
                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66672 2.6099V13.6671H5.33338V2.6099L1.13812 6.80516L0.195312 5.86235L6.00005 0.0576172L11.8048 5.86235L10.862 6.80516L6.66672 2.6099Z" fill="#BF1E77"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="catalog__container">
                <div class="catalog__cards">
                    <div class="catalog__card-1">
                        <div class="catalog__card_container-img-1">
                            <a href="">
                                <img class="fav-off" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="catalog__card_text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-2">
                        <div class="catalog__card_container-img-2">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-on.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-3">
                        <div class="catalog__card_container-img-3">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-1">
                        <div class="catalog__card_container-img-1">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-3">
                        <div class="catalog__card_container-img-3">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-2">
                        <div class="catalog__card_container-img-2">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-2">
                        <div class="catalog__card_container-img-2">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-1">
                        <div class="catalog__card_container-img-1">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-3">
                        <div class="catalog__card_container-img-3">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-3">
                        <div class="catalog__card_container-img-3">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-2">
                        <div class="catalog__card_container-img-2">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>

                    <div class="catalog__card-1">
                        <div class="catalog__card_container-img-1">
                            <a href="">
                                <img class="fav-on" src="<?= Url::to(['imgs/fav-off.png']) ?>" alt="">
                            </a>
                        </div>
                        <p class="card__text">Рогожка</p>
                        <a href=""><h4 class="catalog__card_name">Альпийская деревенька</h4></a>
                        <p class="catalog__card_info-1"><span>Ширина</span>1.5 м</p>
                        <p class="catalog__card_info-2"><span>Состав</span>100%</p>
                        <p class="catalog__card_info-3"><span>Плотность</span>170 гр/м2</p>
                        <div class="catalog__card_divider"></div>
                        <div class="catalog__card_buy">
                            <div class="catalog__card_buy-price">240 ₽<span>360 ₽</span></div>
                            <div class="catalog__card_buy-to-basket"><a href="">В корзину</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

