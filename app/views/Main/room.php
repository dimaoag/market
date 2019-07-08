<?php


?>

<div class="container room-top-container">
    <div class="go-back">
        <a href="index.html" class="back-link">
                <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="15" viewBox="0 0 28 15" fill="none"><rect width="26.9981" height="1.26554" rx="0.632768" transform="matrix(-1 0 0 1 27.3092 6.51123)" fill="#374454"/><rect width="10.1066" height="1.26554" rx="0.632768" transform="matrix(-0.70666 0.707553 0.707553 0.70666 7.14185 0)" fill="#374454"/><rect width="10.1066" height="1.26554" rx="0.632768" transform="matrix(0.707067 0.707146 0.707146 -0.707067 0.0234375 7.24963)" fill="#374454"/></svg>
                </span>
            Назад
        </a>
    </div>
    <section class="page-room-name">
        <h1 class="h1">
            Помещение а2
        </h1>
    </section>
</div>
<div class="container all-about-page d-flex">
    <section class="room">
        <h2 class="visually-hidden">
            Галерея
        </h2>
        <div class="room-slider-wrapper">
            <div class="room-slider">
                <div class="room-slider-item">
                    <a data-fancybox="gallery" href="img/room-1.jpg">
                        <img src="img/room-1.jpg" alt="Фото помещения">
                    </a>
                </div>
                <div class="room-slider-item">
                    <a data-fancybox="gallery" href="img/room-1.jpg">
                        <img src="img/room-1.jpg" alt="Фото помещения">
                    </a>
                </div>
                <div class="room-slider-item">
                    <a data-fancybox="gallery" href="img/room-1.jpg">
                        <img src="img/room-1.jpg" alt="Фото помещения">
                    </a>
                </div>
                <div class="room-slider-item">
                    <a data-fancybox="gallery" href="img/room-1.jpg">
                        <img src="img/room-1.jpg" alt="Фото помещения">
                    </a>
                </div>
            </div>
            <button type="button" class="slider-arrow room-prev slick-arrow">
                    <span class="visually-hidden">
                        Назад
                    </span>
            </button>
            <button type="button" class="slider-arrow room-next slick-arrow">
                    <span class="visually-hidden">
                        Вперед
                    </span>
            </button>
        </div>
    </section>
    <section class="order-room-info">
        <div class="order-room-info-vd-wrapper">
            <p class="order-image-wrapper">
                <img src="img/order-logo.svg" width="183" height="184" alt="Логотип Арендодателя">
            </p>
            <p class="room-status status-free">
                Свободное помещение
            </p>
            <p class="room-text-info">
                Секция: А3
            </p>
            <p class="room-text-info">
                Общая площадь: 126м²
            </p>
            <p class="room-text-info">
                Этаж: 1
            </p>
        </div>
        <div class="order-room-info-form">
            <form action="order.php" method="post">
                <p class="how-mach">
                    узнать стоимость
                </p>
                <ul class="order-room-info-list list-reset">
                    <li class="order-room-info-item">
                        <label for="order-name" class="visually-hidden">
                            Имя
                        </label>
                        <input type="text" name="order-name" class="input" placeholder="Имя" id="order-name">
                    </li>
                    <li class="order-room-info-item">
                        <label for="order-number" class="visually-hidden">
                            Номер
                        </label>
                        <input type="tel" name="order-phone" data-mask="callback-catalog-phone" class="input" placeholder="Номер" id="order-number">
                    </li>
                </ul>
                <button type="submit" class="button">
                    отправить
                    <span class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11"
                                 fill="none"><g clip-path="url(#clip4)"><path
                                            d="M9.15139 5.4999L4.99091 1.33964C4.69193 1.04054 4.69193 0.555661 4.99091 0.256677C5.2899 -0.0424275 5.77475 -0.0424275 6.07385 0.256677L10.7759 4.95861C10.9254 5.10818 11 5.30399 11 5.4999C11 5.69589 10.9252 5.89184 10.7759 6.04134L6.07385 10.7432C5.77475 11.0425 5.28987 11.0425 4.99091 10.7432C4.69193 10.4442 4.69193 9.95932 4.99091 9.66036L9.15139 5.4999ZM0.224238 9.66036C-0.0747459 9.95934 -0.0747459 10.4443 0.224238 10.7432C0.523221 11.0425 1.00793 11.0425 1.3072 10.7432L6.00921 6.04136C6.1587 5.89187 6.23324 5.69591 6.23324 5.49993C6.23324 5.30402 6.15856 5.10806 6.00921 4.95864L1.3072 0.256677C1.00795 -0.0424275 0.523221 -0.0424275 0.224238 0.256677C-0.0747459 0.555661 -0.0747459 1.04051 0.224238 1.33964L4.38481 5.4999L0.224238 9.66036Z"
                                            fill="white"></path></g><defs><clipPath id="clip4"><rect width="11" height="11"
                                                                                                     fill="white"></rect></clipPath></defs></svg>
                        </span>
                </button>
            </form>
        </div>
    </section>
</div>
<section class="only-text">
    <div class="container">
        <article class="only-text-description">
            <p>
                XXLstudio - самая большая фотостудия в Киеве. Здесь Вы найдете все для качественной фотосъемки. Мы предлагаем воспользоваться нашими услугами потому что: <br> Впервые в Украине студии для фотосъемки оформлены с применением профессионального дизайнерского интерьера XXLstudio использует только высококачественное профессиональное оборудование Profoto <br> Интерьер наших помещений оформлен одной из ведущих дизайнерских студий в Украине <br> Воспользоваться фотостудиями можно 24 часа в сутки <br> Во всех помещениях есть кондиционеры и бесплатный WI-FI <br> У нас удобное месторасположение – рядом со станцией м. Берестейска <br> Комфортные современно меблированные залы ожидания <br> Доступна гримерная комната <br> Забронировать любую из наших студий можно on line на нашем сайте https://xxl-studio.ua/или по телефону 095) 227 01 11, (067) 596 01 11, (093) 951 01 11
            </p>
        </article>
    </div>
</section>