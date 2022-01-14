<?php
    require_once 'modules/Arr.php';
    $arr = new Arr; // создаем объект

    echo $arr->add(1)->push([2, 4])->add(3)->getSum();