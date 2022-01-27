<?php

    require_once 'modules/Helper.php';
    require_once 'modules/User.php';
    require_once 'modules/City.php';

    $user = new User('john', 30);
    echo $user->getName() . '<br>'; // выведет 'john'
    echo $user->getAge() . '<br>';  // выведет 30

    $city = new City('Nook', 20000);
    echo $city->getName() . '<br>';
    echo $city->getAge();
