<?php
    require_once 'modules/Arr.php';
    require_once 'modules/SumHelper.php';
    $arr = new Arr(); // создаем объект
    $arr->add(1);
    $arr->add(3);
    $arr->add(6);

    echo $arr->getSum23();