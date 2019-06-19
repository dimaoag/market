<?php
namespace app\models\admin;

use app\models\AppModel;

/**
 * @property int $id
 * @property string $address
 * @property string $email
 * @property string $phone_1
 * @property string $phone_2
 * @property string $phone_3
 * @property string $telegram
 * @property string $viber
 * @property string $facebook
 * @property string $instagram
 *
 */

class Contact extends AppModel {

    public $attributes = [
        'address' => '',
        'email' => '',
        'phone_1' => '',
        'phone_2' => '',
        'phone_3' => '',
        'telegram' => '',
        'viber' => '',
        'facebook' => '',
        'instagram' => '',
    ];

    public $rules = [
        'required' => [
            ['address'],
            ['email'],
            ['telegram'],
            ['viber'],
            ['facebook'],
            ['instagram'],
        ],
        'email' => [
            ['email'],
        ],

    ];


}