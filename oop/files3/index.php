<?php
    require_once 'modules/Arr.php';
    $arr = new Arr; // создаем объект

    $arr->add(1); // добавляем в массив число 1
    $arr->add(2); // добавляем в массив число 2
    $arr->push([23, 45]);
    echo $arr->getSum();