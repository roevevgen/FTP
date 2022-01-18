<?php
    require_once 'modules/Employee.php';
    require_once 'modules/Student.php';
    require_once 'modules/UsersCollection.php';

    $usersCollection = new UsersCollection;

    $usersCollection->add(new Employee('john', 200)); // попадет к работникам
    $usersCollection->add(new Employee('geek', 300)); // попадет к работникам

    $usersCollection->add(new Student('eric', 100));
    $usersCollection->add(new Student('katya', 500));

    echo $usersCollection->getTotalSalary() . '<br>';

    echo $usersCollection->getTotalScholarship() . '<br>';

    echo $usersCollection->getTotalPayment();