<?php


    class Circle
    {
        const PI = 3.14; // запишем число ПИ в константу
        private static $radius; // радиус круга

        public function __construct($radius){

            self::$radius = $radius;
        }

        public static function getSquare($radius){
            // Пи умножить на квадрат радиуса
            return self::PI * $radius * $radius;
        }

        public static function getCircuit($radius)
        {
            // 2 Пи умножить на радиус
           return 2 * self::PI * $radius;
        }

    }