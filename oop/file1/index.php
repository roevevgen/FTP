<?php
    require_once 'modules/Car.php';

    $car = [
        new Car('Hummer', 'black', 45),
        new Car('Ferrari', 'red', 60),
        new Car('BMW', 'blue', 80),
        new Car('Mercedes', 'red', 30)
    ];

    foreach ($car as $new) {
        echo 'Машина создана ' . $new->getName() . ' Цвет ' . $new->getColor() . ' Топливо ' . $new->getFuel() . '<br>';
    }
