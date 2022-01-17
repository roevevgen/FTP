<?php
    require_once 'modules/Employee.php';
    require_once 'modules/EmployeesCollection.php';

    $employeesCollection = new EmployeesCollection;
    $employeesCollection->add(new Employee('john', 200));
    $employeesCollection->add(new Employee('erick', 300));
    $employeesCollection->add(new Employee('Clod', 500));

    echo $employeesCollection->getTotalSalary() .'<br>';
    var_dump($employeesCollection->get());

    echo $employeesCollection->count();