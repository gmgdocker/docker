<?php

function getToken($promo){
    $promos =[
        '653' => '4I6q0xGP7OFlCbWRg50NhkTTQlxi-FBi',
        '652' => 'wU2mkYU-hGIl8p1OAkOM4A0c1Um1_KjS',
        '645' => 'sJ3-yuEtj9G7heF6LfZ3BmHLxxCoeB2J',
        '639' => 'lXjr8rfd7KDknzGn1Q089F88x-RPo1ms',
        '089' => '6fjEnQZIq9T09N3RKZpmz2hdQMFWjXx8',
        '586' => 'h3lpBO3SBIl6erPgrUXu7qo5iqugUbDI',
        '172' => '4VsRKpJQ9HI2I4sPW-NJ0BgKELHEMAK5',
        '101' => 'Jt1PgSZRtP47u6LTzjg0O3BOFXvL2QeX',
        '102' => 'rCqYXSj-UJMO4G-mMgw5l-9Dqe448Qcq',
        '670' => 'Ye1VUZ9L3X6VEWpVHYtmxkuWOhJG06W1',
        '012' => 'rIUghs9LUIdkJ50kPHM5tBPuHBSPiYZQ',
        '279' => 'vrP8nFahWeLsHsalAeoFvPyj0SpnlTP1',
        '288' => 'h9Jg_9-KcOum0cbFttwoZfl-FUN0F4Fc'

    ];
    if (array_key_exists($promo, $promos)) {
        return $promos[$promo];
    }

    return '';
}
