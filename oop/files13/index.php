<?php
    require_once 'modules/iMath.php';
    require_once 'modules/Math.php';
    require_once 'modules/iUser.php';
    require_once 'modules/User.php';

    $math = new Math();
    echo 'Summa ' . $math->sum(3, 5) . '<hr>';
    echo 'Divide ' . $math->divide(3, 5) . '<hr>';
    echo 'Subtract ' . $math->subtract(4, 8) . '<hr>';
    echo 'Multiply ' . $math->multiply(3, 5) . '<hr>';

    unset($math);

    $user = new User();
    $user->setName('Ivan');
    $user->setAge(35);

    echo $user->getName() . '<hr>';
    echo $user->getAge();