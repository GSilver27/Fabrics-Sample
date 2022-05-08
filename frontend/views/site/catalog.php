<?php
/** @var yii\web\View $this */

use yii\helpers\url;

use frontend\assets\AppAsset;
AppAsset::register($this);
$this->title = 'Каталог';
?>
    <section class="breadcrumbs">
        <div class="breadcrumbs-bg"></div>
        <div class="breadcrumbs-inner wrapper">
            <img src="<?= Url::to(['imgs/home.png']) ?>" alt="">
            <a href="<?= Url::to(['site/']) ?>">Главная</a> <span class="breadcrumbs__b-slash">\</span> <span class="breadcrumbs__last">Каталог товаров</span>
        </div>
    </section>

    <main class="catalog wrapper">
        <section class="catalog__sidebar">
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
                <div>
                    Цена за метр<br>
                    <input type="range" id="">
                </div>
                <div class="catalog__divider"></div>
                <div>
                    Ширина<br>
                    <input type="range" id="">
                </div>
                <div class="catalog__divider"></div>
                <div>
                    Плотность<br>
                    <input type="range" id="">
                </div>
                <div class="catalog__divider"></div>
            </div>

            <div class="catalog__types">
                <details open>
                    <summary>Тип ткани</summary>
                    <input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                    <br><input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                </details>
            </div>
            <div class="catalog__divider"></div>

            <div class="catalog__picture">
                <details>
                    <summary>Рисунок</summary>
                    <input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                    <br><input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                </details>
            </div>
            <div class="catalog__divider"></div>

            <div class="catalog__appointment">
                <details>
                    <summary>Назначение</summary>
                    <input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                    <br><input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                </details>
            </div>
            <div class="catalog__divider"></div>

            <div class="catalog__color">
                <details>
                    <summary>Цвет</summary>
                    <input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                    <br><input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                </details>
            </div>
            <div class="catalog__divider"></div>

            <div class="catalog__feature">
                <details>
                    <summary>Особенности</summary>
                    <input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                    <br><input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                </details>
            </div>
            <div class="catalog__divider"></div>

            <div class="catalog__compound">
                <details>
                    <summary>Состав</summary>
                    <input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                    <br><input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                </details>
            </div>
            <div class="catalog__divider"></div>

            <div class="catalog__manufacture">
                <details>
                    <summary>Cтрана производитель</summary>
                    <input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                    <br><input type="checkbox">Акрил
                    <br><input type="checkbox">Альпака
                    <br><input type="checkbox">Атлас
                    <br><input type="checkbox">Ацетат
                    <br><input type="checkbox">Бархат
                    <br><input type="checkbox">Батист
                </details>
            </div>
            <div class="catalog__divider"></div>

            <div class="catalog__filters_btns">
                <div class="btn-apply">Применить</div>
                <div class="btn-reset">Сбросить</div>
            </div>
        </section>

        <section class="catalog__products">
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

            <section class="catalog__pagination">
                <div class="pagination__container">
                    <div class="pagination__prev">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M1.84264 7L8 13.0889L7.07868 14L-3.0598e-07 7L7.07868 -4.02723e-08L8 0.911083L1.84264 7Z" fill="#545155"/>
                        </svg>
                    </div>

                    <div class="pagination__page">
                        1
                    </div>

                    <div class="pagination__page-current">
                        2
                    </div>

                    <div class="pagination__page">
                        3
                    </div>

                    <div class="pagination__page">
                        4
                    </div>

                    <div class="pagination__page">
                        ...
                    </div>

                    <div class="pagination__page">
                        11
                    </div>

                    <div class="pagination__next">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.15736 7L5.1388e-07 13.0889L0.921323 14L8 7L0.921322 -4.02723e-08L3.98247e-08 0.911083L6.15736 7Z" fill="#545155"/>
                        </svg>
                    </div>
                </div>

                <div class="pagination__option">
                    <div class="pagination__option-text">Показывать<br>на странице:</div>
                    <div class="pagination__option-amount">
                        12
                         <select name="" id="">
                            <option value="empy"></option>
                            <option value="11">13</option>
                            <option value="11">14</option>
                            <option value="11">15</option>
                        </select>
                    </div>
                </div>
            </section>
        </section>
    </main>