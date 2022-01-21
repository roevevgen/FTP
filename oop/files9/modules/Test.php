<?php


    class Test
    {
        public static $staticProperty;
        private static string $property = 'Help me';
        public $usualProperty;

        /**
         * @return mixed
         */
        public static function getProperty()
        {
            return self::$property;
        }

        /**
         * @param $value
         */
        public static function setProperty($value): void
        {
            self::$property = $value;
        }
    }