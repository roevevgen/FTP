<?php
    require_once 'modules/Employee.php';
    require_once 'modules/EmployeesCollection.php';

    $employeesCollection = new EmployeesCollection;
    $employee = new Employee('john', 100);
    $employee1 = new Employee('john', 100);

    $employeesCollection->add($employee);
    $employeesCollection->add($employee);

    $employeesCollection->add($employee1);
    $employeesCollection->add($employee1);
//    $employeesCollection->add(new Employee('erick', 300));
//    $employeesCollection->add(new Employee('Clod', 500));

//    echo $employeesCollection->getTotalSalary() .'<br>';
    var_dump($employeesCollection->get());

    //    echo $employeesCollection->count();