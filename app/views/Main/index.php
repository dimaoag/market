<?php

/** @var $services app\models\admin\Service [] */
/** @var $jobs app\models\admin\Job [] */
/** @var $employees app\models\admin\Employee [] */
/** @var $contact app\models\admin\Contact */
/** @var $isShowJobBtn boolean */
/** @var $offset integer */

?>


<header>
    <div class="header_wrapper" style="background-image: url('<?= PATH ?>/img/header-1.png')">
        <div class="header_menu_and_logo_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 logo_nav_column">
                        <div class="logo">
                            <a href="/">
                                <img src="<?= PATH ?>/img/logo_white.png" alt="logo_white.png">
                            </a>
                        </div>
                        <div class="main_navbar">
                            <button class="burger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <nav class="main_navbar_box">
                                <ul class="main_menu">
                                    <li>
                                        <a href="#s-about-us">О компании</a>
                                    </li>
                                    <li>
                                        <a href="#s-how_we_mad">Наши услуги</a>
                                    </li>
                                    <li>
                                        <a href="#last-work">Примеры работ</a>
                                    </li>
                                    <li>
                                        <a href="#pr">Пиар</a>
                                    </li>
                                    <li>
                                        <a href="#contacts_footer">Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_text">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header_text_wrapper">
                            <h1>
                                Создание и монтаж видео-контента
                            </h1>
                            <div class="header_text_small">
                                для YouTube и Instagram
                            </div>
                            <div class="header_text_smal_button">
                                <a href="#price-calc-modal" class="full_red_reverse_btn open_price_modal">
                                    Рассчитать стоимость
                                </a>
                                <a href="#last-work" class="full_red_reverse_btn">
                                    Посмотреть работы
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="s-about-us" id="s-about-us">
        <div class="container about_us_container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="about_us_wrapper_text">
                        <div class="title_with_red_line">
                            <h2>Давай знакомиться</h2>
                        </div>
                        <div class="about_us_wrapper-text">
                            <p>
                               Givi Studio - молодой и талантливый коллектив, который следует главным трендам мировой сети. Мы собрали в одной команде лучших режиссеров видеомонтажа, сценаристов и PR-менеджеров в Украине. Наша компания разрабатывает образы, пишет сценарии, готовит стратегии развития блоггеров, а так же производит видеомонтаж уже отснятого материала. Специалисты Givi Studio занимают призовые места в международных конкурсах, регулярно проходят курсы повышения квалификации.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="about_us_wrapper_image">
                        <div class="about_us_wrapper_image-1">
                            <img src="<?= PATH ?>/img/ab-1.png" alt="ab-1.png">
                        </div>
                        <div class="about_us_wrapper_image-2">
                            <img src="<?= PATH ?>/img/about-2.png" alt="about-2.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-how_we_made" id="s-how_we_mad">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title_with_red_line">
                        <h2>Что мы можем сделать</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container how-we-made_container">
            <div class="row">

                    <?php if (!empty($services)): ?>
                        <?php foreach ($services as $service): ?>

                            <div class="col-xl-4 col-lg-6 col-md-6 how-we-made_item">
                                <div class="how-we-made_item_wrapper">
                                    <div class="how-we-made_item_wrapper-image">
                                        <a href="#servise-modal_<?= $service->id ?>" class="open_servise_modal">
                                            <img src="<?= PATH ?>/upload/<?= $service->image ?: '' ?>" alt="<?= $service->image ?: '' ?>">
                                        </a>
                                        <div class="more_title">Подробнее</div>
                                    </div>
                                    <div class="how-we-made_item_wrapper-content">
                                        <a href="#servise-modal_<?= $service->id ?>"
                                           class="servise_name open_servise_modal">
                                            <?= h($service->title) ?>
                                        </a>
                                        <div class="product-description">
                                            <p>
                                                <?= h($service->sub_title) ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="servise-modal_<?= $service->id ?>" class="white-popup-block servise--modal mfp-hide">
                                    <div class="servise--moda-wrapper">
                                        <div class="servise--moda-wrapper-title">
                                            <?= h($service->title) ?>
                                        </div>
                                        <div class="servise--moda-wrapper-only-text">
                                            <?= $service->description ?>
                                            <?php if ($service->price): ?>
                                                <div class="m-servise_price">
                                                    Цена от <?= h($service->price) ?> <?= $service->currency ?>
                                                </div>
                                            <?php endif; ?>

                                            <div class="m_form">
                                                <form action="<?= PATH ?>/main/send-service" method="post" class="send-form">
                                                    <div class="m_form_in_form">
                                                        <input type="hidden" name="service_name" value="<?= h($service->title) ?>">
                                                        <div class="m_form-item">
                                                            <input type="text" class="input_red_line" name="username" placeholder="Как к Вам обращаться?" required>
                                                        </div>
                                                        <div class="m_form-item">
                                                            <input type="text" class="input_red_line" name="phone" placeholder="Укажите телефон *" data-mask="callback-catalog-phone" required>
                                                        </div>
                                                        <div class="m_form-item m_form-item-button">
                                                            <button type="submit" class="btn_red">Рассчитать стоимость</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="m_form_text">
                                                    <p>
                                                        <span>*</span> на этот телефон в ближайшее время Вас наберет наш менеджер и более детально проконсультирует Вас
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>


            </div>
        </div>
        <div class="large_text">
            SERVICE
        </div>
    </section>
    <section class="s-last-work" id="last-work">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title_with_red_line">
                        <h2>Результаты последних работ</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container last-work-container">
            <div class="row" id="jobs-container">

                <?php if (!empty($jobs)): ?>
                    <?php foreach ($jobs as $job): ?>
                        <div class="col-md-6 col-12 last-work-item">
                            <a href="#" class="last-work-link" data-video-id="<?= $job->url_video ?>">
                                <img src="http://i3.ytimg.com/vi/<?= $job->url_video ?>/maxresdefault.jpg" alt="">
                                <span class="play__wrapper">
                                    <span class="play_icon_wrapper">
                                        <span class="play_icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="41" viewBox="0 0 35 41"><defs><path id="rda0a" d="M1338.64 2568.26l-26.704-16.824c-.79-.47-1.77-.392-2.51-.392-2.961 0-2.948 2.287-2.948 2.866v34.387c0 .49-.013 2.866 2.948 2.866.74 0 1.721.078 2.51-.392l26.703-16.824c2.192-1.304 1.813-2.843 1.813-2.843s.379-1.54-1.813-2.843z"/></defs><g><g transform="translate(-1306 -2551)"><use fill="#fff" xlink:href="#rda0a"/></g></g></svg>
                                        </span>
                                    </span>
                                    <span class="play_text">
                                        <?= h($job->title) ?>
                                    </span>
                                </span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if ($isShowJobBtn): ?>
                    <div class="col-12 button_more_video_column" id="load-jobs-btn-wrap">
                        <button class="btn_transparent" data-offset="<?=$offset?>" id="load-jobs-btn">Показать еще</button>
                    </div>
                <?php  endif; ?>

            </div>
        </div>
    </section>
    <section class="s-pr" id="pr">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="title_with_red_line">
                        <h2>PR (Пиар)</h2>
                    </div>
                    <div class="about_us_wrapper-text">
                        <p>
                            Что же все-таки важнее: качественный контент или грамотный пиар? А можно ли вообще донести этот самый контент до зрителя без пиара? На сегодняшний день есть проблема перенасыщения видеоблоггерами как в Instagram, так и на YouTube. Из-за этого появилась реальная борьба за каждого зрителя, а цена подписчика выросла до рекордных показателей. Как же заявить о себе? Как найти свою аудиторию?  Пиар блогеров - специфическое направление, в котором мы уверенно держим лидерство. Мы с легкостью определим Вашу целевую аудиторию, поможем ее набрать и удержать, а так же полностью возьмем на себя ответственность за Ваш имидж на просторах социальных сетей и YouTube. Givi Studio бережно относится к финансам клиента и дает реалистичные прогнозы.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-12 pr-image">
                    <img src="<?= PATH ?>/img/pr-1.png" alt="pr-1.png">
                </div>
            </div>
        </div>
    </section>
    <?php if (!empty($employees)): ?>
        <section class="s-our_team">
        <div class="container">
            <div class="row">
                <div class="col-12 title_with_red_col">
                    <div class="title_with_red_line">
                        <h2>Наша команда</h2>
                    </div>
                    <div class="slider_navigation">
                        <button class="prev-team">
                            <span class="nav_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="25" viewBox="0 0 35 25"><defs><path id="dlqca" d="M1036.79 4895.27l10.26-10.26a1.603 1.603 0 0 1 2.268 2.267l-7.523 7.523h27.4a1.603 1.603 0 0 1 0 3.206h-27.4l7.522 7.524a1.603 1.603 0 1 1-2.267 2.267l-10.26-10.26a1.603 1.603 0 0 1 0-2.267z"/></defs><g><g transform="translate(-1036 -4884)"><use xlink:href="#dlqca"/></g></g></svg>
                            </span>
                        </button>
                        <button class="next-team">
                            <span class="nav_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="25" viewBox="0 0 35 25"><defs><path id="i8txa" d="M1129.345 4895.27l-10.26-10.26a1.603 1.603 0 0 0-2.267 2.268l7.523 7.523h-27.4a1.603 1.603 0 0 0 0 3.206h27.4l-7.523 7.523a1.603 1.603 0 1 0 2.268 2.267l10.259-10.26a1.603 1.603 0 0 0 0-2.267z"/></defs><g><g transform="translate(-1095 -4884)"><use xlink:href="#i8txa"/></g></g></svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container our-team_container">
            <div class="row">
                <div class="col-12">
                    <div class="our-team_slider_wrapper">
                        <div class="our-team_slider">
                            <?php foreach ($employees as $employee): ?>
                                <div class="our-team_slider-item">
                                    <div class="our-team_slider-item-wrapper">
                                        <div class="our-team_slider-item-wrap-image">
                                            <img src="<?= PATH ?>/upload/<?= $employee->image ?: '' ?>" alt="<?= $employee->image ?: '' ?>">
                                        </div>
                                        <div class="our-team_slider-item-wrap-content">
                                            <div class="our-team_slider-item-wrap-name">
                                                <a href="#"><?= h($employee->position) ?></a>
                                            </div>
                                            <div class="our-team_slider-item-wrap-acount-name">
                                                <p>
                                                    <?= h($employee->username) ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="s-prodaction">
        <div class="container prodaction_container">
            <div class="large_text">
                CREATE
            </div>
            <div class="row">
                <div class="col-12 prodaction_column">
                    <div class="prodaction-slider-wrapper">
                        <div class="prodaction-slider">
                            <div class="prodaction-slider-item">
                                <div class="prodaction-slider-item-wrapper">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-7 prodaction_text_column">
                                            <div class="prodaction_text_column-wrapper">
                                                <div class="prodaction_name">
                                                    01 Пре-продакшн
                                                </div>
                                                <div class="prodaction_text">
                                                    <p>
                                                        Первый и несомненно важный этап: пишем сценарии, разрабатываем образы, по необходимости привлекаем актеров и подбираем локации, выбираем костюмы и реквизиты.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-5 prodaction_image_column">
                                           <img src="img/pr/p-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prodaction-slider-item">
                                <div class="prodaction-slider-item-wrapper">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-7 prodaction_text_column">
                                            <div class="prodaction_text_column-wrapper">
                                                <div class="prodaction_name">
                                                    02 Съемки
                                                </div>
                                                <div class="prodaction_text">
                                                    <p>
                                                        Работа с камерой.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-5  prodaction_image_column">
                                            <img src="img/p-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prodaction-slider-item">
                                <div class="prodaction-slider-item-wrapper">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-7 prodaction_text_column">
                                            <div class="prodaction_text_column-wrapper">
                                                <div class="prodaction_name">
                                                    03 Пост-продакшн
                                                </div>
                                                <div class="prodaction_text">
                                                    <p>
                                                       Над созданием продакшн-продукта должны работать профессионалы. Иначе заказчик рискует получить несовершенный материал, который попросту никого не заинтересует.
                                                        Данный этап можно разделить на 3 мини этапа:
                                                        цветокоррекция материала, работа с аудио, визуальные эффекты (VFX)
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-5  prodaction_image_column">
                                            <img src="img/pr/p-1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prodaction-slider-item">
                                <div class="prodaction-slider-item-wrapper">
                                    <div class="row">
                                        <div class="col-xl-8 col-lg-7 prodaction_text_column">
                                            <div class="prodaction_text_column-wrapper">
                                                <div class="prodaction_name">
                                                    04 Выпуск видеоконтента и ПИАР
                                                </div>
                                                <div class="prodaction_text">
                                                    <p>
                                                        Этап продвижения и защиты образа (имиджа, престижа) личности и канала. Один из важнейших этапов, позволяющий популяризировать Вас и Ваши медиаресурсы.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-5  prodaction_image_column">
                                            <img src="img/pr/p-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="prodaction_modal_open_block">
                            <a href="#price-calc-modal" class="btn_red open_price_modal">
                                Рассчитать стоимость
                            </a>
                        </div>
                    </div>
                    <div class="slider_navigation">
                        <button class="prev-prodaction slick-arrow" type="button">
								<span class="nav_icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="25" viewBox="0 0 35 25"><defs><path id="dlqca" d="M1036.79 4895.27l10.26-10.26a1.603 1.603 0 0 1 2.268 2.267l-7.523 7.523h27.4a1.603 1.603 0 0 1 0 3.206h-27.4l7.522 7.524a1.603 1.603 0 1 1-2.267 2.267l-10.26-10.26a1.603 1.603 0 0 1 0-2.267z"></path></defs><g><g transform="translate(-1036 -4884)"><use xlink:href="#dlqca"></use></g></g></svg>
								</span>
                        </button>
                        <button class="next-prodaction slick-arrow" type="button">
								<span class="nav_icon">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="25" viewBox="0 0 35 25"><defs><path id="i8txa" d="M1129.345 4895.27l-10.26-10.26a1.603 1.603 0 0 0-2.267 2.268l7.523 7.523h-27.4a1.603 1.603 0 0 0 0 3.206h27.4l-7.523 7.523a1.603 1.603 0 1 0 2.268 2.267l10.259-10.26a1.603 1.603 0 0 0 0-2.267z"></path></defs><g><g transform="translate(-1095 -4884)"><use xlink:href="#i8txa"></use></g></g></svg>
								</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="s-reviews">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title_with_red_line">
                        <h2>Свыше 100 довольных клиентов</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container reviews_container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 reviews_col">
                    <div class="reviews_col_wrapper">
                        <img src="img/r-1.png" alt="">
                        <p>
                            25 YouTube блогера
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 reviews_col">
                    <div class="reviews_col_wrapper">
                        <img src="img/r-2.png" alt="">
                        <p>
                            64 Instagram блогера
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 reviews_col">
                    <div class="reviews_col_wrapper">
                        <img src="img/r-3.png" alt="">
                        <p>
                            Нам доверяют более 11 компаний
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="container" id="contacts_footer">
        <div class="row">
            <div class="col-md-6 col-12 footer_content_column">
                <div class="title_with_red_line">
                    <h2>Свяжитесь с нами</h2>
                </div>
                <div class="footer_content_text">
                    <p>
                        Вы можете связаться с нами любым удобным способом. Мы постараемся
                        максимально быстро и подробно ответить на все ваши вопросы.
                    </p>
                </div>
                <div class="footer_socila_block">
                    <div class="footer_socila_block-item">
                        <address>
                        <span class="footer_social_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="20" viewBox="0 0 14 20"><defs><path id="6xqva" d="M262.07 5937.766a1.828 1.828 0 0 1-1.827-1.826c0-1.007.82-1.827 1.826-1.827 1.007 0 1.826.82 1.826 1.827 0 1.007-.819 1.826-1.826 1.826zm0-4.383a2.56 2.56 0 0 0-2.558 2.557 2.56 2.56 0 0 0 2.557 2.556 2.56 2.56 0 0 0 2.557-2.556 2.56 2.56 0 0 0-2.557-2.557z"/><path id="6xqvb" d="M267.015 5940.48l-5.01 7.237-5.02-7.248c-1.898-2.532-1.626-6.692.584-8.9a6.232 6.232 0 0 1 4.435-1.839c1.676 0 3.252.653 4.437 1.838 2.21 2.21 2.482 6.369.574 8.912zm-.058-9.428a6.959 6.959 0 0 0-4.953-2.052c-1.87 0-3.63.729-4.952 2.052-2.449 2.448-2.753 7.053-.66 9.844l5.612 8.104 5.604-8.093c2.102-2.802 1.798-7.407-.65-9.855z"/></defs><g><g transform="translate(-255 -5929)"><g><use xlink:href="#6xqva"/></g><g><use xlink:href="#6xqvb"/></g></g></g></svg>
                        </span>
                            <?= h($contact->address) ?>
                        </address>
                    </div>
                    <div class="footer_socila_block-item">
                        <span class="footer_social_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="15" viewBox="0 0 20 15"><defs><path id="x1q4a" d="M271.193 5984.982a.32.32 0 0 1-.22-.088l-3.711-3.481a.322.322 0 1 1 .441-.47l3.711 3.481a.322.322 0 0 1-.22.558z"/><path id="x1q4b" d="M258.806 5984.982a.323.323 0 0 1-.22-.558l3.711-3.48a.323.323 0 0 1 .442.469l-3.712 3.48a.32.32 0 0 1-.22.089z"/><path id="x1q4c" d="M256.612 5974.645a.969.969 0 0 0-.967.967v10.994c0 .534.434.968.967.968h16.776a.969.969 0 0 0 .967-.968v-10.994a.969.969 0 0 0-.967-.967zm16.776 13.573h-16.776a1.614 1.614 0 0 1-1.612-1.612v-10.994c0-.889.724-1.612 1.612-1.612h16.776c.888 0 1.612.723 1.612 1.612v10.994c0 .89-.724 1.612-1.612 1.612z"/><path id="x1q4d" d="M265 5982.73c-.429 0-.858-.143-1.184-.427l-8.28-7.224a.323.323 0 0 1-.032-.455.324.324 0 0 1 .455-.031l8.28 7.223c.413.359 1.11.359 1.52 0l8.271-7.212a.323.323 0 0 1 .424.487l-8.27 7.211a1.802 1.802 0 0 1-1.184.428z"/></defs><g><g transform="translate(-255 -5974)"><g><g><use xlink:href="#x1q4a"/></g><g><use xlink:href="#x1q4b"/></g></g><g><use xlink:href="#x1q4c"/></g><g><use xlink:href="#x1q4d"/></g></g></g></svg>
                        </span>
                        <a href="mailto:<?= h($contact->email) ?>"><?= h($contact->email) ?></a>
                    </div>
                    <?php if (!empty($contact->phone_1)): ?>
                        <div class="footer_socila_block-item">
                            <span class="footer_social_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><defs><path id="gwana" d="M274.257 6030.671l-1.015 1.693a1.722 1.722 0 0 1-1.017.788c-2.05.563-5.632.097-11.053-5.324-5.421-5.421-5.887-9.003-5.325-11.054.122-.428.405-.793.79-1.018l1.692-1.015a.51.51 0 0 1 .688.155l1.466 2.201 1.23 1.846a.513.513 0 0 1-.11.687l-1.516 1.179c-.461.352-.593.99-.309 1.497l.12.218c.427.782.956 1.754 2.89 3.687 1.933 1.933 2.904 2.462 3.685 2.888l.22.12a1.167 1.167 0 0 0 1.496-.308l1.18-1.516a.513.513 0 0 1 .686-.11l4.047 2.699a.51.51 0 0 1 .155.687zm.218-1.243l-4.048-2.7a1.182 1.182 0 0 0-1.582.257l-1.18 1.517a.504.504 0 0 1-.646.136l-.224-.124c-.743-.405-1.669-.91-3.533-2.775-1.864-1.864-2.37-2.79-2.775-3.533l-.123-.224a.505.505 0 0 1 .134-.648l1.515-1.18c.485-.379.597-1.067.257-1.581l-2.7-4.048a1.175 1.175 0 0 0-1.584-.357l-1.693 1.017c-.531.313-.922.819-1.088 1.413-.61 2.22-.151 6.054 5.495 11.701 4.492 4.492 7.836 5.7 10.134 5.7a5.905 5.905 0 0 0 1.566-.205 2.386 2.386 0 0 0 1.413-1.09l1.018-1.69a1.176 1.176 0 0 0-.356-1.586z"/><path id="gwanb" d="M266.333 6017.334a5.672 5.672 0 0 1 5.665 5.666.333.333 0 1 0 .667 0 6.34 6.34 0 0 0-6.332-6.332.333.333 0 1 0 0 .666z"/><path id="gwanc" d="M266.333 6019.334a3.67 3.67 0 0 1 3.666 3.666.333.333 0 0 0 .666 0 4.338 4.338 0 0 0-4.332-4.333.333.333 0 1 0 0 .667z"/><path id="gwand" d="M266.333 6021.334c.92 0 1.665.746 1.666 1.666a.333.333 0 1 0 .667 0 2.336 2.336 0 0 0-2.333-2.333.333.333 0 1 0 0 .667z"/></defs><g><g transform="translate(-255 -6014)"><g><g><g><use xlink:href="#gwana"/></g><g><use xlink:href="#gwanb"/></g><g><use xlink:href="#gwanc"/></g><g><use xlink:href="#gwand"/></g></g></g></g></g></svg>
                            </span>
                            <a href="tel:<?= h(str_replace([' ', '_', '-', '(', ')'], '', $contact->phone_1)) ?>"><?= h($contact->phone_1) ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($contact->phone_2)): ?>
                        <div class="footer_socila_block-item">
                            <span class="footer_social_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><defs><path id="gwana" d="M274.257 6030.671l-1.015 1.693a1.722 1.722 0 0 1-1.017.788c-2.05.563-5.632.097-11.053-5.324-5.421-5.421-5.887-9.003-5.325-11.054.122-.428.405-.793.79-1.018l1.692-1.015a.51.51 0 0 1 .688.155l1.466 2.201 1.23 1.846a.513.513 0 0 1-.11.687l-1.516 1.179c-.461.352-.593.99-.309 1.497l.12.218c.427.782.956 1.754 2.89 3.687 1.933 1.933 2.904 2.462 3.685 2.888l.22.12a1.167 1.167 0 0 0 1.496-.308l1.18-1.516a.513.513 0 0 1 .686-.11l4.047 2.699a.51.51 0 0 1 .155.687zm.218-1.243l-4.048-2.7a1.182 1.182 0 0 0-1.582.257l-1.18 1.517a.504.504 0 0 1-.646.136l-.224-.124c-.743-.405-1.669-.91-3.533-2.775-1.864-1.864-2.37-2.79-2.775-3.533l-.123-.224a.505.505 0 0 1 .134-.648l1.515-1.18c.485-.379.597-1.067.257-1.581l-2.7-4.048a1.175 1.175 0 0 0-1.584-.357l-1.693 1.017c-.531.313-.922.819-1.088 1.413-.61 2.22-.151 6.054 5.495 11.701 4.492 4.492 7.836 5.7 10.134 5.7a5.905 5.905 0 0 0 1.566-.205 2.386 2.386 0 0 0 1.413-1.09l1.018-1.69a1.176 1.176 0 0 0-.356-1.586z"/><path id="gwanb" d="M266.333 6017.334a5.672 5.672 0 0 1 5.665 5.666.333.333 0 1 0 .667 0 6.34 6.34 0 0 0-6.332-6.332.333.333 0 1 0 0 .666z"/><path id="gwanc" d="M266.333 6019.334a3.67 3.67 0 0 1 3.666 3.666.333.333 0 0 0 .666 0 4.338 4.338 0 0 0-4.332-4.333.333.333 0 1 0 0 .667z"/><path id="gwand" d="M266.333 6021.334c.92 0 1.665.746 1.666 1.666a.333.333 0 1 0 .667 0 2.336 2.336 0 0 0-2.333-2.333.333.333 0 1 0 0 .667z"/></defs><g><g transform="translate(-255 -6014)"><g><g><g><use xlink:href="#gwana"/></g><g><use xlink:href="#gwanb"/></g><g><use xlink:href="#gwanc"/></g><g><use xlink:href="#gwand"/></g></g></g></g></g></svg>
                            </span>
                            <a href="tel:<?= h(str_replace([' ', '_', '-', '(', ')'], '', $contact->phone_2)) ?>"><?= h($contact->phone_2) ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($contact->phone_3)): ?>
                        <div class="footer_socila_block-item">
                            <span class="footer_social_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><defs><path id="gwana" d="M274.257 6030.671l-1.015 1.693a1.722 1.722 0 0 1-1.017.788c-2.05.563-5.632.097-11.053-5.324-5.421-5.421-5.887-9.003-5.325-11.054.122-.428.405-.793.79-1.018l1.692-1.015a.51.51 0 0 1 .688.155l1.466 2.201 1.23 1.846a.513.513 0 0 1-.11.687l-1.516 1.179c-.461.352-.593.99-.309 1.497l.12.218c.427.782.956 1.754 2.89 3.687 1.933 1.933 2.904 2.462 3.685 2.888l.22.12a1.167 1.167 0 0 0 1.496-.308l1.18-1.516a.513.513 0 0 1 .686-.11l4.047 2.699a.51.51 0 0 1 .155.687zm.218-1.243l-4.048-2.7a1.182 1.182 0 0 0-1.582.257l-1.18 1.517a.504.504 0 0 1-.646.136l-.224-.124c-.743-.405-1.669-.91-3.533-2.775-1.864-1.864-2.37-2.79-2.775-3.533l-.123-.224a.505.505 0 0 1 .134-.648l1.515-1.18c.485-.379.597-1.067.257-1.581l-2.7-4.048a1.175 1.175 0 0 0-1.584-.357l-1.693 1.017c-.531.313-.922.819-1.088 1.413-.61 2.22-.151 6.054 5.495 11.701 4.492 4.492 7.836 5.7 10.134 5.7a5.905 5.905 0 0 0 1.566-.205 2.386 2.386 0 0 0 1.413-1.09l1.018-1.69a1.176 1.176 0 0 0-.356-1.586z"/><path id="gwanb" d="M266.333 6017.334a5.672 5.672 0 0 1 5.665 5.666.333.333 0 1 0 .667 0 6.34 6.34 0 0 0-6.332-6.332.333.333 0 1 0 0 .666z"/><path id="gwanc" d="M266.333 6019.334a3.67 3.67 0 0 1 3.666 3.666.333.333 0 0 0 .666 0 4.338 4.338 0 0 0-4.332-4.333.333.333 0 1 0 0 .667z"/><path id="gwand" d="M266.333 6021.334c.92 0 1.665.746 1.666 1.666a.333.333 0 1 0 .667 0 2.336 2.336 0 0 0-2.333-2.333.333.333 0 1 0 0 .667z"/></defs><g><g transform="translate(-255 -6014)"><g><g><g><use xlink:href="#gwana"/></g><g><use xlink:href="#gwanb"/></g><g><use xlink:href="#gwanc"/></g><g><use xlink:href="#gwand"/></g></g></g></g></g></svg>
                            </span>
                            <a href="tel:<?= h(str_replace([' ', '_', '-', '(', ')'], '', $contact->phone_3)) ?>"><?= h($contact->phone_3) ?></a>
                        </div>
                    <?php endif; ?>
                    <div class="footer_socila_block-item">
                        <span class="footer_social_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="18" viewBox="0 0 20 18"><defs><path id="s0faa" d="M263.863 6068.683l9.361-8.966-2.866 13.452zm-.684 3.25l.235-2.138 1.15.795zm5.766-11.087l-8.285 5.642-2.58-1.024zm-6.563 7.635l-.202 1.83-.775-2.914 7.3-4.973zM275 6057l-20 8.501 5.243 2.081 1.867 7.016 3.436-3.33 5.591 3.861z"/></defs><g><g transform="translate(-255 -6057)"><use xlink:href="#s0faa"/></g></g></svg>
                        </span>
                        <a href="tg://resolve?domain=<?= h($contact->telegram) ?>">Telegram</a>
                    </div>
                    <div class="footer_socila_block-item">
                        <span class="footer_social_icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20"><defs><path id="jtqta" d="M260.129 6104.766c-.385.489-.359 1.338.075 2.334.5 1.15 1.46 2.34 2.701 3.354 1.241 1.014 2.601 1.717 3.83 1.98 1.063.229 1.902.088 2.308-.385l.512-.755-1.868-.944-.905 1.101-.407-.177c-.88-.383-1.898-.856-2.821-1.61-.923-.754-1.588-1.656-2.139-2.442l-.254-.363.912-1.11-1.264-1.675-.68.692zm7.543 8.945c-.37 0-.765-.044-1.184-.134-1.407-.301-2.943-1.09-4.326-2.218-1.382-1.13-2.46-2.477-3.033-3.794-.629-1.444-.59-2.707.107-3.557.02-.025.02-.025 1.214-1.238l.477-.484 2.635 3.494-.93 1.133c.453.627.989 1.295 1.664 1.847.676.552 1.439.944 2.144 1.264l.937-1.141 3.893 1.968-.372.55c-.914 1.347-.914 1.347-.934 1.372-.509.618-1.302.938-2.292.938z"/><path id="jtqtb" d="M259.817 6115.108l.243.164a8.8 8.8 0 0 0 4.94 1.507 8.782 8.782 0 0 0 6.243-2.579 8.737 8.737 0 0 0 2.585-6.226 8.736 8.736 0 0 0-2.586-6.226 8.782 8.782 0 0 0-6.242-2.58 8.782 8.782 0 0 0-6.242 2.58 8.736 8.736 0 0 0-2.586 6.226c0 1.963.634 3.82 1.833 5.371l.212.274-1.056 2.404zm-4.804 2.892l1.855-4.222a9.857 9.857 0 0 1-1.868-5.804 9.896 9.896 0 0 1 2.929-7.053A9.948 9.948 0 0 1 265 6098a9.948 9.948 0 0 1 7.071 2.921 9.896 9.896 0 0 1 2.929 7.053 9.896 9.896 0 0 1-2.929 7.053 9.948 9.948 0 0 1-7.071 2.92 9.968 9.968 0 0 1-5.35-1.545z"/></defs><g><g transform="translate(-255 -6098)"><g><use xlink:href="#jtqta"/></g><g><use xlink:href="#jtqtb"/></g></g></g></svg>
                        </span>
                        <a href="viber://chat?number=<?= h($contact->viber) ?>">Вайбер</a>
                    </div>
                </div>
                <div class="footer_news_social">
                    <div class="footer_news_title">
                        Наши новости в соц сетях
                    </div>
                    <ul class="news-social">
                        <li>
                            <a href="<?= h($contact->facebook) ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="25" viewBox="0 0 14 25"><defs><path id="qh6xa" d="M267.984 6192.005l-3.236-.005c-3.636 0-5.985 2.41-5.985 6.141v2.832h-3.254a.509.509 0 0 0-.509.51v4.102c0 .281.228.509.509.509h3.254v10.352c0 .281.227.51.508.51h4.246a.509.509 0 0 0 .509-.51v-10.352h3.804a.509.509 0 0 0 .509-.51l.001-4.102a.51.51 0 0 0-.509-.509h-3.805v-2.4c0-1.154.274-1.74 1.777-1.74h2.18c.281 0 .509-.228.509-.51v-3.809a.509.509 0 0 0-.508-.509z"/></defs><g><g transform="translate(-255 -6192)"><g><use fill="#545454" xlink:href="#qh6xa"/></g></g></g></svg>
                            </a>
                        </li>
                        <li>
                            <a href="<?= h($contact->instagram) ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 25 25"><defs><path id="nowfa" d="M355.462 6195.655c0-1.209.984-2.193 2.194-2.193h17.643c1.21 0 2.194.984 2.194 2.193v17.644c0 1.21-.984 2.194-2.194 2.194h-17.643a2.196 2.196 0 0 1-2.194-2.194zm2.193 21.3H375.3a3.66 3.66 0 0 0 3.656-3.656v-17.644a3.66 3.66 0 0 0-3.656-3.655h-17.644a3.66 3.66 0 0 0-3.655 3.655v17.644a3.66 3.66 0 0 0 3.655 3.656z"/><path id="nowfb" d="M366.477 6199.36a5.123 5.123 0 0 1 5.118 5.117 5.123 5.123 0 0 1-5.118 5.118 5.123 5.123 0 0 1-5.117-5.118 5.123 5.123 0 0 1 5.117-5.117zm0 11.697a6.587 6.587 0 0 0 6.58-6.58 6.587 6.587 0 0 0-6.58-6.58 6.587 6.587 0 0 0-6.58 6.58 6.587 6.587 0 0 0 6.58 6.58z"/><path id="nowfc" d="M373.788 6196.435a.732.732 0 0 1 0 1.463.732.732 0 0 1 0-1.463zm0 2.925c1.21 0 2.194-.984 2.194-2.194 0-1.209-.984-2.193-2.194-2.193-1.209 0-2.193.984-2.193 2.193 0 1.21.984 2.194 2.193 2.194z"/></defs><g><g transform="translate(-354 -6192)"><g><use fill="#545454" xlink:href="#nowfa"/></g><g><use fill="#545454" xlink:href="#nowfb"/></g><g><use fill="#545454" xlink:href="#nowfc"/></g></g></g></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-12 footer_form">
                <div class="footer_form-wrapper">
                    <form action="<?= PATH ?>/main/send" method="post" class="send-form">
                        <div class="footer_form-wrapper-item">
                            <label for="name">Имя</label>
                            <input type="text" name="username" class="input" placeholder="Сергей" id="name" required>
                        </div>
                        <div class="footer_form-wrapper-item">
                            <label for="name">E-mail</label>
                            <input type="email" name="email" class="input" placeholder="post@gmail.com" required>
                        </div>
                        <div class="footer_form-wrapper-item">
                            <label for="name">Телефон</label>
                            <input type="tel" name="phone" class="input" data-mask="callback-catalog-phone" placeholder="Укажите телефон" required>
                        </div>
                        <?php if (!empty($services)): ?>

                            <div class="footer_form-wrapper-input-block-title">
                                Тип видео
                            </div>
                            <div class="footer_form-wrapper-input-block">
                                <?php foreach ($services as $service): ?>
                                    <label class="checkbox">
                                        <input type="checkbox" name="service_name[]" value="<?= h($service->title) ?>">
                                        <div class="checkbox__text"><?= h($service->title) ?></div>
                                    </label>
                                <?php endforeach; ?>
                            </div>

                        <?php endif; ?>

                        <div class="footer_form-wrapper-button">
                            <button type="submit" class="btn_red">Рассчитать стоимость</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Script-->

<!--modal calc_price-->
<div id="price-calc-modal" class="white-popup-block price_calc--modal mfp-hide">
    <div class="price_calc-moda-wrapper">
        <div class="price_calc-main_title">
            Рассчитать стоимость
        </div>
        <div class="footer_form-wrapper">
            <form action="<?= PATH ?>/main/send" method="post" class="send-form">
                <div class="footer_form-wrapper-item">
                    <label for="name">Имя</label>
                    <input type="text" name="username" class="input" placeholder="Сергей" id="name" required="">
                </div>
                <div class="footer_form-wrapper-item">
                    <label for="name">E-mail</label>
                    <input type="email" name="email" class="input" placeholder="post@gmail.com">
                </div>
                <div class="footer_form-wrapper-item">
                    <label for="name">Телефон</label>
                    <input type="tel" name="phone" class="input" data-mask="callback-catalog-phone" placeholder="Укажите телефон" required>
                </div>
                <?php if (!empty($services)): ?>

                    <div class="footer_form-wrapper-input-block-title">
                        Тип видео
                    </div>
                    <div class="footer_form-wrapper-input-block">
                        <?php foreach ($services as $service): ?>
                            <label class="checkbox">
                                <input type="checkbox" name="service_name[]" value="<?= h($service->title) ?>">
                                <div class="checkbox__text"><?= h($service->title) ?></div>
                            </label>
                        <?php endforeach; ?>
                    </div>

                <?php endif; ?>
                <div class="footer_form-wrapper-button">
                    <button type="submit" class="btn_red">Рассчитать стоимость</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--Modal Thankyou -->
<div id="thank-you-modal" class="white-popup-block thank-you_calc--modal mfp-hide">
    <div class="thank-you-moda-text">
        <div class="thank-you-moda-title">Спасибо!</div>
        <p>
            Наши менеджеры свяжутся с вами в ближайшее время
        </p>
    </div>
</div>