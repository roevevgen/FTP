<?php
    declare(strict_types=1);



    require_once __DIR__ . '/vendor/autoload.php';

    use file1\modules\Car;

    $faker = Faker\Factory::create() ;
    echo $faker->name;
    echo $faker->address;
    $car = [
        new Car('Hummer', 'black', 45),
        new Car('Ferrari', 'red', 60),
        new Car('BMW', 'blue', 80),
        new Car('Mercedes', 'red', 30)
    ];

    foreach ($car as $new) {
        echo 'Машина создана ' . $new->getName() . ' Цвет ' . $new->getColor() . ' Топливо ' . $new->getFuel() . '<br>';
    }
    dump($car);

