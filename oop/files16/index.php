<?php

    require_once 'modules/Helper.php';
    require_once 'modules/HelperName.php';
    require_once 'modules/City.php';
    require_once 'modules/User.php';

    $user = new User('john', 30);
    echo $user->getName2() . '<br>'; // выведет 'john'
    echo $user->getAge2() . '<br>';  // выведет 30

    $city = new City('Nook', 20000);
    echo $city->getName() . '<br>';
    echo $city->getAge();
