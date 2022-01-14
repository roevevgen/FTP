<?php
    require_once 'modules/ArraySumHelper.php';
    $arraysumhelper = new ArraySumHelper;
     $arraysumhelper->getSum4(3);
    $arraysumhelper->getSum1(56);
    $arraysumhelper->getSum2(80);
    echo $arraysumhelper->getSum4(3);