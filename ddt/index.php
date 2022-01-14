<?php
    $a = 10;
    $b = 7;
    $rest = $a % $b;

    if ($rest === 0) {
        echo 'делится нацело';
    } else {
        echo 'делится с остатком ' . $rest;
    }
