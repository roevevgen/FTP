<?php
    require_once 'modules/User.php';
    require_once 'modules/Circle.php';

    $user1 = new User('user1');
    echo User::getCount() . '<br>';

    $user2 = new User('user2');
    echo User::getCount() . '<br>';

    $circle = new Circle(10);
    echo Circle::getSquare(4) .'<br>';
    echo Circle::getCircuit(3);