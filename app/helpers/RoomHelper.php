<?php

namespace app\helpers;


use app\models\admin\Room;

class RoomHelper
{

    public static function getClass($status): string
    {
        return $status == Room::STATUS_FREE ? 'free' : 'close';
    }


    public static function getText(array $room): string
    {
        return $room['status'] == Room::STATUS_FREE ? $room['name'] . ' - ' . $room['area'] . 'м²' : $room['name'];
    }


    public static function getTagOptions(array $room): string
    {
        return 'href="'. PATH . '/main/room?id=' . $room['id'] .'" class="link-in-svg ' . self::getClass($room['status']). '" data-href="'. PATH . '/main/room?id=' . $room['id'] .'" tabindex="0"';
    }


}