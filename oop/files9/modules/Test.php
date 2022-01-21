<?php


    class Test
    {
        private static string $property = 'Help me';

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