<?php


    class Geometry
    {
        private static $pi = 3.14;
        // Площадь круга:
        public static function getCircleSquare($radius)
        {
           return self::$pi * $radius * $radius;
        }

        // Длина окружности:
        public static function getCircleCircuit($radius)
        {
            return 2 * self::$pi * $radius;
        }
    }