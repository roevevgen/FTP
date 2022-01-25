<?php
    require_once 'modules/User.php';
    require_once 'modules/Employee.php';
    require_once 'modules/Student.php';
    require_once 'modules/Figure.php';
    require_once 'modules/Quadrant.php';
    require_once 'modules/Rectangle.php';

    $employee = new Employee();
    $employee->setName('Clod');
    $employee->setSalary(2000);
    $employee->increaseRevenue(300);
    $employee->decreaseRevenue(40);

    echo $employee->getSalary() . '<br>';

    $student = new Student();
    $student->setName('Born');
    $student->setScholarship(380);
    $student->increaseRevenue(450);
    $student->decreaseRevenue(34);

    echo $student->getScholarship() . '<br>';
    unset($employee);
    unset($student);

    $quadrant = new Quadrant(2);
    echo $quadrant->getSquare() . '<br>';
    echo $quadrant->getPerimeter() . '<br>';

    $rectangle = new Rectangle(2, 4);
    echo $rectangle->getSquare() . '<br>';
    echo $rectangle->getPerimeter();