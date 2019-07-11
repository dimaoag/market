<?php


/** @var $firstFloorRooms app\models\admin\Room */
/** @var $secondFloorRooms app\models\admin\Room */

/** @var $thirdFloorRooms app\models\admin\Room */

use app\helpers\RoomHelper;
use app\models\admin\Room;

?>

<section class="main-slider">
    <div class="container">
        <h2 class="h2 visually-hidden">
            Галерея
        </h2>
        <div class="main-slider-wrapper">
            <div class="slider-item-content">
                <p class="slider-item-content-headline">
                    субАренда помещений
                </p>
                <p class="slider-item-content-under-headline">
                    для твоего бизнеса
                </p>
                <p class="slider-image-description">
                    Приглашаем посетить бизнес-центр на бульваре Вацлава Гавела, 8.<br> У нас вы сможете выбрать любую
                    площадь и организовать пространство так, как вам угодно.
                </p>
                <a href="#order-room-anchor" class="button anchor" tabindex="0">
                    Выбрать помещение
                    <span class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none"><g clip-path="url(#clip2)"><path d="M5.5001 9.15139L9.66036 4.99091C9.95946 4.69193 10.4443 4.69193 10.7433 4.99091C11.0424 5.2899 11.0424 5.77475 10.7433 6.07385L6.04138 10.7759C5.89182 10.9254 5.69601 11 5.5001 11C5.30411 11 5.10816 10.9252 4.95866 10.7759L0.256776 6.07385C-0.042475 5.77475 -0.042475 5.28987 0.256776 4.99091C0.555759 4.69193 1.04068 4.69193 1.33964 4.99091L5.5001 9.15139ZM1.33964 0.224237C1.04066 -0.0747463 0.555735 -0.0747464 0.256776 0.224237C-0.0424748 0.523221 -0.0424748 1.00793 0.256776 1.3072L4.95864 6.00921C5.10813 6.1587 5.30409 6.23324 5.50007 6.23324C5.69598 6.23324 5.89194 6.15856 6.04136 6.00921L10.7433 1.3072C11.0424 1.00795 11.0424 0.523221 10.7433 0.224238C10.4443 -0.0747459 9.95949 -0.0747459 9.66036 0.224238L5.5001 4.38481L1.33964 0.224237Z" fill="white"></path></g><defs><clipPath id="clip2"><rect width="11" height="11" fill="white" transform="translate(11) rotate(90)"></rect></clipPath></defs></svg>
                    </span>
                </a>
            </div>
            <div class="slider">
                <div class="slider-item">
                    <div class="slider-image" style="background-image: url('img/2.jpg')">
                        <p class="slider-image-description">
                            В подарок крутейшие соседи: лучшие фотостудии, фуд-корты, танцевальные школы, магазины
                            одежды, продуктовый монополист и тд.
                        </p>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image" style="background-image: url('img/2.jpg')">
                        <p class="slider-image-description">
                            В подарок крутейшие соседи: лучшие фотостудии, фуд-корты, танцевальные школы, магазины
                            одежды, продуктовый монополист и тд.
                        </p>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image" style="background-image: url('img/2.jpg')">
                        <p class="slider-image-description">
                            В подарок крутейшие соседи: лучшие фотостудии, фуд-корты, танцевальные школы, магазины
                            одежды, продуктовый монополист и тд.
                        </p>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-image" style="background-image: url('img/2.jpg')">
                        <p class="slider-image-description">
                            В подарок крутейшие соседи: лучшие фотостудии, фуд-корты, танцевальные школы, магазины
                            одежды, продуктовый монополист и тд.
                        </p>
                    </div>
                </div>
            </div>
            <div class="main-slider-button">
                <button type="button" class="slider-arrow slider-prev">
                    <span class="visually-hidden">
                        Назад
                    </span>
                </button>
                <button type="button" class="slider-arrow slider-next">
                    <span class="visually-hidden">
                        Вперед
                    </span>
                </button>
            </div>
        </div>
    </div>
</section>
<section class="order-room" id="order-room-anchor">
    <div class="container">
        <h2 class="h2">
            предлагаем выбрать помещение
        </h2>
        <p class="order-description">
            Нажмите на нужное помещение для получения полной информации о нем.
        </p>
        <div class="order-room-main d-flex" id="order-room-main">
            <div class="order-room-main-left">
                <p class="floors-text">Этажи</p>
                <ul class="tabs-nav">
                    <li>
                        <a href="#tab3">
                            <span class="visually-hidden">Первый этаж</span>
                            3
                        </a>
                    </li>
                    <li>
                        <a href="#tab2">
                            <span class="visually-hidden">Второй этаж</span>
                            2
                        </a>
                    </li>
                    <li class="active">
                        <a href="#tab1">
                            <span class="visually-hidden">Третий этаж</span>
                            1
                        </a>
                    </li>
                </ul>
            </div>
            <div class="order-room-main-right">
                <p class="order-free">Свободные помещения</p>
                <p class="order-bookings">Занятые помещения</p>
                <div class="tabs-content">
                    <div id="tab3" class="tab-item">
                        <div class="order-slider">
                            <div class="order-slider-item">
                                <p class="order-slider-floor">Левое крыло</p>
                                <div class="floor-content floor-content-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1189 338" xml:space="preserve" width="1189" height="338">
									<style type="text/css">
                                        .floor-content-left .st0 {
                                            fill: #CACACA;
                                        }

                                        .floor-content-left .st1 {
                                            fill: none;
                                            stroke: #CACACA;
                                        }

                                        .floor-content-left .st2 {
                                            fill: #C4C4C4;
                                        }

                                        .floor-content-left .st3 {
                                            fill: #C3C7CB;
                                            stroke: #FFFFFF;
                                        }

                                        .floor-content-left .st4 {
                                            fill: #FFFFFF;
                                        }

                                        .floor-content-left .st5 {
                                            font-family: "Gilroy", Arial, sans-serif;
                                        }

                                        .floor-content-left .st6 {
                                            font-size: 17px;
                                        }

                                        .floor-content-left .st7 {
                                            fill: #C3C7CB;
                                        }
                                    </style>
                                        <g id="layer_1">
                                            <rect x="981.9" y="83.2" class="st0" width="1" height="20.4"></rect>
                                            <rect x="976.2" y="85.6" transform="matrix(0.7076 -0.7067 0.7067 0.7076 225.8105 717.7162)" class="st0" width="7.6" height="1"></rect>
                                            <rect x="984.4" y="82.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 227.638 721.6356)" class="st0" width="1" height="7.6"></rect>
                                            <rect x="997.9" y="83" class="st0" width="1" height="20.4"></rect>
                                            <rect x="995.6" y="96.8" transform="matrix(0.7067 -0.7076 0.7076 0.7067 220.9973 734.2618)" class="st0" width="1" height="7.6"></rect>
                                            <rect x="997" y="100.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 221.9815 737.1182)" class="st0" width="7.6" height="1"></rect>
                                            <rect x="973.5" y="0.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="6.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="12.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="18.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="24.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="30.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="36.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="42.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="48.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="54.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="60.5" class="st1" width="34" height="6"></rect>
                                            <rect x="973.5" y="66.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1006" y="0" class="st2" width="1" height="73"></rect>
                                            <rect x="974" y="0" class="st2" width="1" height="73"></rect>
                                            <rect x="1188" y="0" class="st2" width="1" height="335"></rect>
                                            <rect x="1" y="0.3" class="st2" width="1" height="283.5"></rect>
                                            <rect x="0.2" y="0" class="st2" width="1188.8" height="0.6"></rect>
                                        </g>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[16]) ?>>
                                            <g id="c17">
                                                <rect x="40.8" y="1" class="st3" width="175" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 115.744 75.4396)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[16]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[17]) ?>>
                                            <g id="c18">
                                                <rect x="240.2" y="1.5" class="st3" width="319" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 386.5489 75.9727)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[17]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[18]) ?>>
                                            <g id="C19">
                                                <path class="st7" d="M972.5,1.5v139.6h78V1.5H1189v336H1V197.9h559.5V1.5H972.5z"></path>
                                                <text transform="matrix(1 0 0 1 765.0114 162.4097)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[18]) ?></text>
                                            </g>
                                        </a>
									</svg>
                                </div>
                            </div>
                            <div class="order-slider-item">
                                <p class="order-slider-floor">Правое крыло</p>
                                <div class="floor-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1189 338" xml:space="preserve" width="1189" height="338">
										<style type="text/css">
                                            .st0 {
                                                fill: #CACACA;
                                            }

                                            .st1 {
                                                fill: none;
                                                stroke: #CACACA;
                                            }

                                            .st2 {
                                                fill: #C4C4C4;
                                            }

                                            .st3 {
                                                fill: #C3C7CB;
                                                stroke: #FFFFFF;
                                            }

                                            .st4 {
                                                fill: #FFFFFF;
                                            }

                                            .st5 {
                                                font-family: "Gilroy", Arial, sans-serif;
                                            }

                                            .st6 {
                                                font-size: 17px;
                                            }
                                        </style>
                                        <g id="layer_1">
                                            <rect x="1121.9" y="85.2" class="st0" width="1" height="20.4"></rect>
                                            <rect x="1116.2" y="87.6" transform="matrix(0.7076 -0.7067 0.7067 0.7076 265.3396 817.2335)" class="st0" width="7.6" height="1"></rect>
                                            <rect x="1124.4" y="84.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 267.2346 821.2227)" class="st0" width="1" height="7.6"></rect>
                                            <rect x="1137.9" y="85" class="st0" width="1" height="20.4"></rect>
                                            <rect x="1135.6" y="98.8" transform="matrix(0.7067 -0.7076 0.7076 0.7067 260.6497 833.9059)" class="st0" width="1" height="7.6"></rect>
                                            <rect x="1137" y="102.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 261.5672 836.694)" class="st0" width="7.6" height="1"></rect>
                                            <rect x="1113.5" y="2.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="8.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="14.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="20.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="26.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="32.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="38.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="44.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="50.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="56.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="62.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1113.5" y="68.5" class="st1" width="34" height="6"></rect>
                                            <rect x="1146" y="2" class="st2" width="1" height="73"></rect>
                                            <rect x="1114" y="2" class="st2" width="1" height="73"></rect>
                                            <rect x="149.9" y="86.2" class="st0" width="1" height="20.4"></rect>
                                            <rect x="144.2" y="88.6" transform="matrix(0.7076 -0.7067 0.7067 0.7076 -19.6251 130.6525)" class="st0" width="7.6" height="1"></rect>
                                            <rect x="152.4" y="85.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -18.2034 134.1687)" class="st0" width="1" height="7.6"></rect>
                                            <rect x="165.9" y="86" class="st0" width="1" height="20.4"></rect>
                                            <rect x="163.6" y="99.8" transform="matrix(0.7067 -0.7076 0.7076 0.7067 -25.1842 146.4576)" class="st0" width="1" height="7.6"></rect>
                                            <rect x="165" y="103.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -23.794 149.7168)" class="st0" width="7.6" height="1"></rect>
                                            <rect x="141.5" y="2.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="8.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="14.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="20.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="26.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="32.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="38.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="44.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="50.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="56.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="62.5" class="st1" width="34" height="6"></rect>
                                            <rect x="141.5" y="68.5" class="st1" width="34" height="6"></rect>
                                            <rect x="174" y="2" class="st2" width="1" height="73"></rect>
                                            <rect x="142" y="2" class="st2" width="1" height="73"></rect>
                                            <rect x="3" y="138" class="st2" width="1" height="73"></rect>
                                            <rect x="1187" y="2.3" class="st2" width="1" height="334.5"></rect>
                                            <rect x="66" y="2" class="st2" width="146" height="1"></rect>
                                            <rect x="1100.2" y="2.1" class="st2" width="86.9" height="1"></rect>
                                            <rect x="1087.9" y="335.5" class="st2" width="99.2" height="1"></rect>
                                            <rect x="69" y="138" class="st2" width="25" height="1"></rect>
                                            <rect x="116" y="138" class="st2" width="25" height="1"></rect>
                                            <rect x="140" y="3" class="st2" width="1" height="136.1"></rect>
                                        </g>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[0]) ?>>
                                            <g id="d1">
                                                <rect x="1.9" y="1.2" class="st3" width="69" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 28.0908 75.7031)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[0]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[1]) ?>>
                                            <g id="d2">
                                                <rect x="2.4" y="198.2" class="st3" width="139" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 62.3395 272.7183)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[1]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[2]) ?>>
                                            <g id="d3">
                                                <rect x="211.5" y="1.3" class="st3" width="69" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 236.1034 75.7965)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[2]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[3]) ?>>
                                            <g id="d4">
                                                <rect x="140.9" y="198.1" class="st3" width="488.4" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 374.9638 272.5831)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[3]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[4]) ?>>
                                            <g id="d5">
                                                <rect x="281" y="1.1" class="st3" width="139" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 340.5882 75.6096)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[4]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[5]) ?>>
                                            <g id="d6">
                                                <rect x="419.9" y="1.4" class="st3" width="209" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 514.2765 75.9198)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[5]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[6]) ?>>
                                            <g id="c7">
                                                <rect x="629" y="1.6" class="st3" width="34" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 636.8398 76.06)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[6]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[7]) ?>>
                                            <g id="c8">
                                                <rect x="662.8" y="1.6" class="st3" width="34" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 669.7324 76.06)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[7]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[8]) ?>>
                                            <g id="c9">
                                                <rect x="629" y="197.9" class="st3" width="379.4" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 806.5486 272.3655)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[8]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[9]) ?>>
                                            <g id="c10">
                                                <rect x="696.6" y="1.4" class="st3" width="104" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 734.9091 75.9198)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[9]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[10]) ?>>
                                            <g id="c11">
                                                <rect x="800.4" y="1.4" class="st3" width="34" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 805.803 75.9198)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[10]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[11]) ?>>
                                            <g id="c12">
                                                <rect x="834.8" y="1.4" class="st3" width="69" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 856.4611 75.9198)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[11]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[12]) ?>>
                                            <g id="c13">
                                                <rect x="904.3" y="1.4" class="st3" width="139" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 960.7925 75.9198)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[12]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[13]) ?>>
                                            <g id="c14">
                                                <rect x="1008.6" y="198.4" class="st3" width="34" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 1012.312 272.8901)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[13]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[14]) ?>>
                                            <g id="c15">
                                                <rect x="1043" y="1.4" class="st3" width="69" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 1064.5374 75.9198)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[14]) ?></text>
                                            </g>
                                        </a>
                                        <a <?= RoomHelper::getTagOptions($thirdFloorRooms[15]) ?>>
                                            <g id="c16">
                                                <rect x="1043.3" y="198.3" class="st3" width="68.8" height="139"></rect>
                                                <text transform="matrix(1 0 0 1 1063.6794 272.791)" class="st4 st5 st6"><?= RoomHelper::getText($thirdFloorRooms[15]) ?></text>
                                            </g>
                                        </a>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="order-button_wrapper">
                            <button class="order-prev slider-arrow">
                                <span class="visually-hidden">Назад</span>
                            </button>
                            <button class="order-next slider-arrow">
                                <span class="visually-hidden">Вперед</span>
                            </button>
                        </div>
                        <p class="order-section-title">Левое и правое крыло</p>
                    </div>
                    <div id="tab2" class="tab-item">
                        <div class="floor-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Слой_1" x="0px" y="0px" viewBox="0 0 1119 338" xml:space="preserve" width="1119" height="336">
							<style type="text/css">
                                #tab2 .st0 {
                                    fill: #C4C4C4;
                                }

                                #tab2 .st1 {
                                    fill: #CACACA;
                                }

                                #tab2 .st2 {
                                    fill: none;
                                    stroke: #CACACA;
                                }

                                #tab2 .st3 {
                                    fill: #C3C7CB;
                                    stroke: #FFFFFF;
                                }

                                #tab2 .st4 {
                                    fill: #FFFFFF;
                                }

                                #tab2 .st5 {
                                    font-family: "Gilroy", Arial, sans-serif;
                                }

                                #tab2 .st6 {
                                    font-size: 17px;
                                }

                                #tab2 .st7 {
                                    fill: #8FD58E;
                                    stroke: #FFFFFF;
                                }

                                #tab2 .st9 {
                                    font-family: "Gilroy", Arial, sans-serif;
                                }

                                #tab2 .st10 {
                                    font-family: 'ArialMT', Arial, sans-serif;;
                                }
                            </style>
                                <g id="group">
                                    <rect x="0.9" y="2" class="st0" width="80" height="1"></rect>
                                    <rect x="9.8" y="84.2" class="st1" width="1" height="20.4"></rect>
                                    <rect x="4.1" y="86.6" transform="matrix(0.7076 -0.7067 0.7067 0.7076 -59.1835 31.0646)" class="st1" width="7.6" height="1"></rect>
                                    <rect x="12.3" y="83.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -57.829 34.5117)" class="st1" width="1" height="7.6"></rect>
                                    <rect x="25.8" y="84" class="st1" width="1" height="20.4"></rect>
                                    <rect x="23.5" y="97.8" transform="matrix(0.7067 -0.7076 0.7076 0.7067 -64.866 46.7427)" class="st1" width="1" height="7.6"></rect>
                                    <rect x="24.9" y="101.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -63.4087 50.071)" class="st1" width="7.6" height="1"></rect>
                                    <rect x="1.4" y="2.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="8.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="14.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="20.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="26.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="32.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="38.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="44.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="50.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="56.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="62.5" class="st2" width="34" height="6"></rect>
                                    <rect x="1.4" y="68.5" class="st2" width="34" height="6"></rect>
                                    <rect x="33.9" y="2" class="st0" width="1" height="73"></rect>
                                    <rect x="1.9" y="2" class="st0" width="1" height="73"></rect>
                                    <path class="st0" d="M2.1,2.1h1.4v334.5H2.1V2.1z"></path>
                                    <rect x="930.1" y="84.3" class="st1" width="1" height="20.4"></rect>
                                    <rect x="924.4" y="86.6" transform="matrix(0.7076 -0.7067 0.7067 0.7076 209.881 681.3899)" class="st1" width="7.6" height="1"></rect>
                                    <rect x="932.5" y="83.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 211.6828 685.2846)" class="st1" width="1" height="7.6"></rect>
                                    <rect x="946.1" y="84.1" class="st1" width="1" height="20.4"></rect>
                                    <rect x="943.7" y="97.9" transform="matrix(0.7067 -0.7076 0.7076 0.7067 205.0205 697.8901)" class="st1" width="1" height="7.6"></rect>
                                    <rect x="945.2" y="101.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 206.0305 700.7712)" class="st1" width="7.6" height="1"></rect>
                                    <rect x="921.6" y="2.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="8.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="14.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="20.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="26.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="32.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="38.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="44.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="50.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="56.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="62.6" class="st2" width="34" height="6"></rect>
                                    <rect x="921.6" y="68.6" class="st2" width="34" height="6"></rect>
                                    <rect x="954.1" y="2.1" class="st0" width="1" height="73"></rect>
                                    <rect x="1115.1" y="140.1" class="st0" width="1" height="61"></rect>
                                    <rect x="917.4" y="2.1" class="st0" width="76.5" height="1"></rect>
                                    <rect x="2.8" y="335.1" class="st0" width="80" height="1"></rect>
                                    <rect x="920.1" y="2.1" class="st0" width="1" height="73"></rect>
                                </g>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[0]) ?>>
                                    <g id="b1">
                                        <rect x="67.9" y="1" class="st3" width="139" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 129.2875 75.5699)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[0]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[1]) ?>>
                                    <g id="b2">
                                        <rect x="68.8" y="198.1" class="st3" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 93.6569 272.6448)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[1]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[2]) ?>>
                                    <g id="b4">
                                        <rect x="207.1" y="0.9" class="st7" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 223.8766 66.3546)" class="st8">
                                            <tspan x="0" y="0" class="st4 st5 st6"><?= $secondFloorRooms[2]['name'] . $text = $secondFloorRooms[2]['status'] == Room::STATUS_FREE ? '-' : '' ?></tspan>
                                            <?php if ($secondFloorRooms[2]['status'] == Room::STATUS_FREE): ?>
                                            <tspan x="0" y="20.4" class="st4 st5 st6"><?= $secondFloorRooms[2]['area'] ?>м</tspan>
                                            <tspan x="29.7" y="20.4" class="st4 st9 st6">²</tspan>
                                            <?php endif; ?>
                                        </text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[3]) ?>>
                                    <g id="b4">
                                        <rect x="138.3" y="198" class="st3" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 162.8467 272.5459)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[3]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[4]) ?>>
                                    <g id="b5">
                                        <rect x="276.9" y="0.9" class="st3" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 301.6559 75.3546)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[4]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[5]) ?>>
                                    <g id="b6">
                                        <rect x="208.1" y="198" class="st3" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 232.8086 272.5459)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[5]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[6]) ?>>
                                    <g id="b7">
                                        <rect x="346.7" y="1" class="st7" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 362.7493 65.2085)">
                                            <tspan x="0" y="0" class="st4 st5 st6"><?= $secondFloorRooms[6]['name'] . $text = $secondFloorRooms[6]['status'] == Room::STATUS_FREE ? '-' : '' ?></tspan>
                                            <?php if ($secondFloorRooms[6]['status'] == Room::STATUS_FREE): ?>
                                                <tspan x="0" y="20.4" class="st4 st5 st6"><?= $secondFloorRooms[6]['area'] ?>м</tspan>
                                                <tspan x="29.7" y="20.4" class="st4 st9 st6">²</tspan>
                                            <?php endif; ?>
                                        </text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[7]) ?>>
                                    <g id="b8">
                                        <rect x="278.1" y="197.8" class="st7" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 294.7153 264.2185)" class="st8">
                                            <tspan x="0" y="0" class="st4 st5 st6"><?= $secondFloorRooms[7]['name'] . $text = $secondFloorRooms[7]['status'] == Room::STATUS_FREE ? '-' : '' ?></tspan>
                                            <?php if ($secondFloorRooms[6]['status'] == Room::STATUS_FREE): ?>
                                                <tspan x="0" y="20.4" class="st4 st5 st6"><?= $secondFloorRooms[7]['area'] ?>м</tspan>
                                                <tspan x="30" y="20.4" class="st4 st9 st6">²</tspan>
                                            <?php endif; ?>
                                        </text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[8]) ?>>
                                    <g id="b9">
                                        <rect x="416.7" y="0.9" class="st3" width="139" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 476.5662 75.3547)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[8]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[9]) ?>>
                                    <g id="b10">
                                        <rect x="347.8" y="197.8" class="st3" width="139" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 401.6069 272.2185)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[9]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[10]) ?>>
                                    <g id="b11">
                                        <rect x="556.4" y="0.9" class="st3" width="34" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 561.9576 75.3545)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[10]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[11]) ?>>
                                    <g id="b12">
                                        <rect x="487.5" y="197.8" class="st3" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 508.786 272.2185)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[11]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[12]) ?>>
                                    <g id="b13">
                                        <rect x="591.7" y="0.9" class="st7" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 608.0273 66.3547)" class="st8">
                                            <tspan x="0" y="0" class="st4 st5 st6"><?= $secondFloorRooms[12]['name'] . $text = $secondFloorRooms[12]['status'] == Room::STATUS_FREE ? '-' : '' ?></tspan>
                                            <?php if ($secondFloorRooms[12]['status'] == Room::STATUS_FREE): ?>
                                                <tspan x="0" y="20.4" class="st4 st5 st6"><?= $secondFloorRooms[12]['area'] ?>м</tspan>
                                                <tspan x="29.7" y="20.4" class="st4 st9 st6">²</tspan>
                                            <?php endif; ?>
                                        </text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[13]) ?>>
                                    <g id="b14">
                                        <rect x="556.9" y="197.8" class="st7" width="139" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 587.5837 272.2185)" class="st8">
                                            <tspan x="0" y="0" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[13]) ?></tspan>
                                        </text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[14]) ?>>
                                    <g id="b15_1_">
                                        <rect x="661.2" y="0.9" class="st7" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 677.5277 66.3547)" class="st8">
                                            <tspan x="0" y="0" class="st4 st5 st6"><?= $secondFloorRooms[14]['name'] . $text = $secondFloorRooms[14]['status'] == Room::STATUS_FREE ? '-' : '' ?></tspan>
                                            <?php if ($secondFloorRooms[14]['status'] == Room::STATUS_FREE): ?>
                                                <tspan x="0" y="20.4" class="st4 st5 st6"><?= $secondFloorRooms[14]['area'] ?>м</tspan>
                                                <tspan x="29.7" y="20.4" class="st4 st9 st6">²</tspan>
                                            <?php endif; ?>
                                        </text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[15]) ?>>
                                    <g id="b16">
                                        <rect x="696.7" y="197.8" class="st3" width="209" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 789.0121 272.2189)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[15]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[16]) ?>>
                                    <g id="b17_1_">
                                        <rect x="730.6" y="1" class="st7" width="34" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 731.2325 65.2547)" class="st4 st5 st6"><?= $secondFloorRooms[16]['name'] . $text = $secondFloorRooms[16]['status'] == Room::STATUS_FREE ? '-' : '' ?></text>
                                        <?php if ($secondFloorRooms[16]['status'] == Room::STATUS_FREE): ?>
                                            <text transform="matrix(1 0 0 1 731.2325 85.6547)" class="st4 st5 st6"><?= $secondFloorRooms[16]['area'] ?>м</text>
                                            <text transform="matrix(1 0 0 1 757.9325 85.6547)" class="st4 st10 st6">²</text>
                                        <?php endif; ?>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[17]) ?>>
                                    <g id="b18_2_">
                                        <rect x="765.1" y="0.9" class="st3" width="155" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 833.834 75.3546)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[17]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[18]) ?>>
                                    <g id="b19_1_">
                                        <rect x="906.4" y="197.8" class="st7" width="69" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 922.3451 262.119)" class="st4 st5 st6"><?= $secondFloorRooms[18]['name'] . $text = $secondFloorRooms[18]['status'] == Room::STATUS_FREE ? '-' : '' ?></text>
                                        <?php if ($secondFloorRooms[18]['status'] == Room::STATUS_FREE): ?>
                                            <text transform="matrix(1 0 0 1 922.3451 282.519)" class="st4 st5 st6"><?= $secondFloorRooms[18]['area'] ?>м</text>
                                            <text transform="matrix(1 0 0 1 952.3451 282.519)" class="st4 st10 st6">²</text>
                                        <?php endif; ?>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[19]) ?>>
                                    <g id="b20">
                                        <rect x="991.7" y="1" class="st7" width="125" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 1015.7771 75.3946)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[19]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($secondFloorRooms[20]) ?>>
                                    <g id="b21">
                                        <rect x="975.7" y="197.8" class="st3" width="141" height="139"></rect>
                                        <text transform="matrix(1 0 0 1 1035.4119 272.2189)" class="st4 st5 st6"><?= RoomHelper::getText($secondFloorRooms[20]) ?></text>
                                    </g>
                                </a>
							</svg>
                        </div>
                    </div>
                    <div id="tab1" class="tab-item tabs-open">
                        <div class="floor-content">
                            <div class="preview">
                                <img src="/img/group-4.svg" width="1084" height="398" alt="Превю помещений">
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1252 339" xml:space="preserve" width="1252" height="337">
                            <style xmlns="http://www.w3.org/2000/svg" type="text/css">
                                #tab1 .st0 {
                                    fill: #C3C7CB;
                                    stroke: #FFFFFF;
                                }

                                #tab1 .st1 {
                                    fill: #FFFFFF;
                                }

                                #tab1 .st2 {
                                    font-family: "Gilroy", Arial, sans-serif;
                                }

                                #tab1 .st3 {
                                    font-size: 17px;
                                }

                                #tab1 .st4 {
                                    fill: #8FD58E;
                                    stroke: #FFFFFF;
                                }

                                #tab1 .st5 {
                                    font-family: "Gilroy", Arial, sans-serif;
                                }

                                #tab1 .st6 {
                                    fill: #C4C4C4;
                                }

                                #tab1 .st7 {
                                    fill: #FFFFFF;
                                    stroke: #CACACA;
                                }

                                #tab1 .st8 {
                                    fill: #CACACA;
                                }

                                #tab1 .st9 {
                                    fill: none;
                                    stroke: #CACACA;
                                }
                            </style>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[0]) ?>>
                                    <g id="A1">
                                        <rect x="141.8" y="141.1" class="st0" width="277" height="197"></rect>
                                        <text transform="matrix(1 0 0 1 271.665 243.5771)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[0]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[1]) ?>>
                                    <g id="A2">
                                        <path class="st4" d="M417.8,338.3v-197h139v59.9h206.5v137.2H417.8z"></path>
                                        <text transform="matrix(1 0 0 1 551.2598 274.8703)"><tspan x="0" y="0" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[1]) ?></tspan></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[2]) ?>>
                                    <g id="A3">
                                        <rect x="557.9" y="2" class="st0" width="69" height="137.5"></rect>
                                        <text transform="matrix(1 0 0 1 582.7777 75.7449)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[2]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[3]) ?>>
                                    <g id="A4">
                                        <rect x="626.5" y="2.3" class="st0" width="69" height="137.5"></rect>
                                        <text transform="matrix(1 0 0 1 650.1639 75.7449)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[3]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[4]) ?>>
                                    <g id="A5">
                                        <rect x="694.8" y="2.5" class="st0" width="69" height="68"></rect>
                                        <text transform="matrix(1 0 0 1 718.8518 41.4948)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[4]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[5]) ?>>
                                    <g id="A6">
                                        <rect x="695.2" y="71.2" class="st0" width="69" height="68"></rect>
                                        <text transform="matrix(1 0 0 1 719.1943 110.1606)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[5]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[6]) ?>>
                                    <g id="A7">
                                        <rect x="764.3" y="2.1" class="st0" width="69" height="137.5"></rect>
                                        <text transform="matrix(1 0 0 1 789.2125 75.8177)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[6]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[7]) ?>>
                                    <g id="A8">
                                        <rect x="833.6" y="45.7" class="st4" width="39" height="93.5"></rect>
                                        <text transform="matrix(1 0 0 1 837.6904 77.0134)">
                                            <tspan x="0" y="0" class="st1 st2 st3"><?= $firstFloorRooms[7]['name'] . $text = $firstFloorRooms[7]['status'] == Room::STATUS_FREE ? '-' : '' ?></tspan>
                                            <?php if ($firstFloorRooms[7]['status'] == Room::STATUS_FREE): ?>
                                                <tspan x="0" y="20.4" class="st1 st2 st3"><?= $firstFloorRooms[7]['area'] ?></tspan>
                                                <tspan x="0" y="40.8" class="st1 st2 st3">м</tspan>
                                                <tspan x="10.9" y="40.8" class="st1 st5 st3">²</tspan>
                                            <?php endif; ?>
                                        </text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[8]) ?>>
                                    <g id="A9">
                                        <rect x="763.3" y="200.7" class="st0" width="208" height="137.5"></rect>
                                        <text transform="matrix(1 0 0 1 857.4382 274.4136)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[8]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[9]) ?>>
                                    <g id="A10">
                                        <rect x="871.8" y="169.5" class="st0" width="99.2" height="31.2"></rect>
                                        <text transform="matrix(1 0 0 1 907.3836 190.0789)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[9]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[10]) ?>>
                                    <g id="A11">
                                        <rect x="971.4" y="200.4" class="st0" width="31.2" height="70.9"></rect>
                                        <text transform="matrix(1 0 0 1 974.9988 240.8412)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[10]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[11]) ?>>
                                    <g id="A12">
                                        <rect x="1021.5" y="200.7" class="st0" width="70.9" height="31.2"></rect>
                                        <text transform="matrix(1 0 0 1 1042.9291 221.2915)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[11]) ?></text>
                                    </g>
                                </a>
                                <a <?= RoomHelper::getTagOptions($firstFloorRooms[12]) ?>>
                                    <g id="A13">
                                        <rect x="1114" y="2" class="st0" width="139" height="335.9"></rect>
                                        <text transform="matrix(1 0 0 1 1170.1287 174.942)" class="st1 st2 st3"><?= RoomHelper::getText($firstFloorRooms[12]) ?></text>
                                    </g>
                                </a>
                                <g id="WC">
                                    <rect x="833.2" y="4.2" class="st0" width="138" height="41.1"></rect>
                                    <text transform="matrix(1 0 0 1 887.7642 27.7448)" class="st1 st2 st3">WC</text>
                                </g>

                                <g id="layer_1">
                                    <rect x="1037" y="3.5" class="st6" width="1" height="136.1"></rect>
                                    <rect x="971.8" y="3.5" class="st6" width="1" height="136.1"></rect>
                                    <rect x="1.6" y="199.5" class="st7" width="138.9" height="137"></rect>
                                    <rect x="417.5" y="3" class="st7" width="139" height="136.1"></rect>
                                    <rect x="278.5" y="3" class="st7" width="139" height="136.1"></rect>
                                    <rect x="139.5" y="3" class="st7" width="139" height="136.1"></rect>
                                    <rect x="1.5" y="3" class="st7" width="139" height="136.1"></rect>
                                    <rect x="1.6" y="139" class="st7" width="138.9" height="60.9"></rect>
                                    <rect x="895" y="95" class="st6" width="1" height="44"></rect>
                                    <rect x="895" y="41.9" class="st6" width="1" height="31.2"></rect>
                                    <rect x="989.9" y="85.2" class="st8" width="1" height="20.4"></rect>
                                    <rect x="984.2" y="87.6" transform="matrix(0.7076 -0.7067 0.7067 0.7076 226.7367 723.9544)" class="st8" width="7.6" height="1"></rect>
                                    <rect x="992.4" y="84.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 228.5672 727.8786)" class="st8" width="1" height="7.6"></rect>
                                    <rect x="1061.9" y="310.2" class="st8" width="1" height="20.4"></rect>
                                    <rect x="1056.2" y="312.6" transform="matrix(0.7076 -0.7067 0.7067 0.7076 88.7947 840.6343)" class="st8" width="7.6" height="1"></rect>
                                    <rect x="1064.4" y="309.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 90.5505 844.7038)" class="st8" width="1" height="7.6"></rect>
                                    <rect x="972.5" y="3.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="9.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="15.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="21.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="27.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="33.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="39.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="45.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="51.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="57.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="63.5" class="st9" width="34" height="6"></rect>
                                    <rect x="972.5" y="69.5" class="st9" width="34" height="6"></rect>
                                    <rect x="1005" y="3" class="st6" width="1" height="73"></rect>
                                    <rect x="973" y="3" class="st6" width="1" height="73"></rect>
                                    <rect x="831" y="3" class="st6" width="141" height="1"></rect>
                                    <rect x="832" y="138" class="st6" width="84" height="1"></rect>
                                    <rect x="941.4" y="139" class="st6" width="31.2" height="1"></rect>
                                    <rect x="980.6" y="3" class="st6" width="141.7" height="1"></rect>
                                    <rect x="969.2" y="199" class="st6" width="144.6" height="1"></rect>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form-callback" id="question">
    <div class="container">
        <div class="form-callback-wrapper">
            <h2 class="h2">
                Будем рады ответить на ваши вопросы
            </h2>
            <p class="form-callback-description">
                Хотите узнать цену помещения или просто проконсультироваться? Оставте свои контакты и наши специалисты
                Вам перезвонят.
            </p>
            <div class="form-callback-form-wrapper">
                <form action="mail.php" method="post">
                    <ul class="form-callback-list list-reset d-flex">
                        <li class="form-callback-item">
                            <label for="name" class="visually-hidden">Имя</label>
                            <input type="text" name="name" class="input" placeholder="Имя" id="name">
                        </li>
                        <li class="form-callback-item">
                            <label for="phone" class="visually-hidden">Телефон</label>
                            <input type="text" name="phone" data-mask="callback-catalog-phone" class="input" placeholder="Номер" id="phone">
                        </li>
                        <li class="form-callback-item">
                            <button type="submit" class="button">
                                отправить
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none"><g clip-path="url(#clip4)"><path d="M9.15139 5.4999L4.99091 1.33964C4.69193 1.04054 4.69193 0.555661 4.99091 0.256677C5.2899 -0.0424275 5.77475 -0.0424275 6.07385 0.256677L10.7759 4.95861C10.9254 5.10818 11 5.30399 11 5.4999C11 5.69589 10.9252 5.89184 10.7759 6.04134L6.07385 10.7432C5.77475 11.0425 5.28987 11.0425 4.99091 10.7432C4.69193 10.4442 4.69193 9.95932 4.99091 9.66036L9.15139 5.4999ZM0.224238 9.66036C-0.0747459 9.95934 -0.0747459 10.4443 0.224238 10.7432C0.523221 11.0425 1.00793 11.0425 1.3072 10.7432L6.00921 6.04136C6.1587 5.89187 6.23324 5.69591 6.23324 5.49993C6.23324 5.30402 6.15856 5.10806 6.00921 4.95864L1.3072 0.256677C1.00795 -0.0424275 0.523221 -0.0424275 0.224238 0.256677C-0.0747459 0.555661 -0.0747459 1.04051 0.224238 1.33964L4.38481 5.4999L0.224238 9.66036Z" fill="white"></path</g><defs><clipPath id="clip4"><rect width="11" height="11" fill="white"></rect></clipPath></defs></svg>
                                </span>
                            </button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</section>
