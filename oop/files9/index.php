<?php
    require_once 'modules/Math.php';
    require_once 'modules/Test.php';

    echo Math::getSum(2, 4) + Math::getProduct(3, 6) . '<br>';
    echo Math::getDoubleSum(3, 6) . '<br>';

//    Test::setProperty('Hello');
    echo Test::getProperty();