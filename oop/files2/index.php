<?php
    require_once 'modules/User.php';
    require_once 'modules/Employee.php';
    $user = new User('Luis', 34, 45);
    $user->setAge(70);
    $user->setName('Lora');
    $user->addAge(30);
    echo $user->getAge() . ' ' . $user->getName(). '<br>';
    unset($user);

    $employee = new Employee('Tom', 35, 25, 2000);
    echo $employee->getName() . ' ' . $employee->getAge() . ' ' . $employee->getSalary() . '<br>';