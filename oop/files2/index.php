<?php
    require_once 'modules/User.php';
    require_once 'modules/Employee.php';
    require_once 'modules/Student.php';
    require_once 'modules/StudentBSU.php';

    $user = new User('Luis', 34, 45);
    $user->setAge(70);
    $user->setName('Lora');
    $user->addAge(30);
    echo $user->getAge() . ' ' . $user->getName(). '<br>';
    unset($user);


    $employee = new Employee('Tom', 35, 25, 2000);
    echo $employee->getName() . ' ' . $employee->getAge() . ' ' . $employee->getSalary() . '<br>';
    unset($employee);

    $student = new Student('Nik', 45, 34, 3 );
    $student->addOneYear();
    $student->setAge(25). '<br>';
    echo $student->getName() . ' ' . $student->getAge() . ' ' . $student->getCourse() . '<br>';

    $bsu = new StudentBSU('Kiril', 45, 36, 3 , 45);
    $bsu->setBsu('Close');
    echo $bsu->getName() . ' ' . $bsu->getAge() . ' ' . $bsu->getCourse() . ' ' . $bsu ->getBsu() . '<br>';
