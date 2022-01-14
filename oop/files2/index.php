<?php
    require_once 'modules/User.php';
    $user = new User('Luis', 34, 45);
    $user->setAge(70);
    $user->setName('Lora');
    $user->addAge(30);
    echo $user->getAge() . ' ' . $user->getName() ;