<?php
/** @var $room app\models\admin\Room */
/** @var $gallery app\models\admin\Gallery[] */

use app\models\admin\Room; ?>

<div class="container room-top-container">
    <div class="go-back">
        <a href="<?= PATH ?>/main/index" class="back-link">
            <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="15" viewBox="0 0 28 15" fill="none"><rect width="26.9981" height="1.26554" rx="0.632768" transform="matrix(-1 0 0 1 27.3092 6.51123)" fill="#374454"/><rect width="10.1066" height="1.26554" rx="0.632768" transform="matrix(-0.70666 0.707553 0.707553 0.70666 7.14185 0)" fill="#374454"/><rect width="10.1066" height="1.26554" rx="0.632768" transform="matrix(0.707067 0.707146 0.707146 -0.707067 0.0234375 7.24963)" fill="#374454"/></svg>
            </span>
            Назад
        </a>
    </div>
    <section class="page-room-name">
        <?php if ($room->status == Room::STATUS_BOOKED && !empty($room->company_name)): ?>
            <h1 class="h1"><?= h($room->company_name) ?></h1>
        <?php else: ?>
            <h1 class="h1">Помещение: <?= h($room->name) ?></h1>
        <?php endif; ?>
    </section>
</div>
<div class="container all-about-page d-flex">
    <?php if (!empty($gallery)): ?>
    <section class="room">
        <h2 class="visually-hidden">
            Галерея
        </h2>
        <div class="room-slider-wrapper">
            <div class="room-slider">
                <?php foreach ($gallery as $item): ?>
                    <div class="room-slider-item">
                        <a data-fancybox="gallery" href="<?= PATH ?>/upload/gallery/<?= $item->image ?>">
                            <img src="<?= PATH ?>/upload/gallery/<?= $item->image ?>" alt="<?= $item->image ?>">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <button type="button" class="slider-arrow room-prev slick-arrow">
                <span class="visually-hidden">Назад</span>
            </button>
            <button type="button" class="slider-arrow room-next slick-arrow">
                <span class="visually-hidden">Вперед</span>
            </button>
        </div>
    </section>
    <?php endif; ?>
    <section class="order-room-info">
        <div class="order-room-info-vd-wrapper">
            <?php if (!empty($room->logo) && $room->status == Room::STATUS_BOOKED): ?>
                <p class="order-image-wrapper">
                    <img src="<?= PATH ?>/upload/logo/<?= $room->logo ?>"  alt="<?= $room->logo ?>">
                </p>
            <?php endif; ?>
            <p class="room-status <?= $room->status == Room::STATUS_FREE ? 'status-free' : 'status-close'; ?>">
                <?= $room->status == Room::STATUS_FREE ? 'Свободное помещение' : 'Занято'; ?>
            </p>
            <p class="room-text-info">
                Секция: <?= h($room->name) ?>
            </p>
            <?php if (!empty($room->area) && $room->status == Room::STATUS_FREE): ?>
                <p class="room-text-info">
                    Общая площадь:  <?= h($room->area) ?>м²
                </p>
            <?php endif; ?>
            <p class="room-text-info">
                Этаж: <?= h($room->floor) ?>
            </p>
        </div>
        <?php if ($room->status == Room::STATUS_FREE): ?>
            <div class="order-room-info-form">
            <form action="<?= PATH ?>/main/send" method="post">
                <input type="hidden" name="room_name" value="<?= h($room->name) ?>" required>
                <p class="how-mach">узнать стоимость</p>
                <ul class="order-room-info-list list-reset">
                    <li class="order-room-info-item">
                        <label for="order-name" class="visually-hidden">Имя</label>
                        <input type="text" name="username" class="input" placeholder="Имя" id="order-name" required>
                    </li>
                    <li class="order-room-info-item">
                        <label for="order-number" class="visually-hidden">Номер</label>
                        <input type="tel" name="phone" data-mask="callback-catalog-phone" class="input" placeholder="Номер" id="order-number" required>
                    </li>
                </ul>
                <button type="submit" class="button">
                    отправить
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none"><g clip-path="url(#clip4)"><path d="M9.15139 5.4999L4.99091 1.33964C4.69193 1.04054 4.69193 0.555661 4.99091 0.256677C5.2899 -0.0424275 5.77475 -0.0424275 6.07385 0.256677L10.7759 4.95861C10.9254 5.10818 11 5.30399 11 5.4999C11 5.69589 10.9252 5.89184 10.7759 6.04134L6.07385 10.7432C5.77475 11.0425 5.28987 11.0425 4.99091 10.7432C4.69193 10.4442 4.69193 9.95932 4.99091 9.66036L9.15139 5.4999ZM0.224238 9.66036C-0.0747459 9.95934 -0.0747459 10.4443 0.224238 10.7432C0.523221 11.0425 1.00793 11.0425 1.3072 10.7432L6.00921 6.04136C6.1587 5.89187 6.23324 5.69591 6.23324 5.49993C6.23324 5.30402 6.15856 5.10806 6.00921 4.95864L1.3072 0.256677C1.00795 -0.0424275 0.523221 -0.0424275 0.224238 0.256677C-0.0747459 0.555661 -0.0747459 1.04051 0.224238 1.33964L4.38481 5.4999L0.224238 9.66036Z" fill="white"></path></g><defs><clipPath id="clip4"><rect width="11" height="11" fill="white"></rect></clipPath></defs></svg>
                    </span>
                </button>
            </form>
        </div>
        <?php endif; ?>

    </section>
</div>
<section class="only-text">
    <div class="container">
        <article class="only-text-description">
            <?= $room->description ?>
        </article>
    </div>
</section>