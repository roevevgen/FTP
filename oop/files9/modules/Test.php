<?php


    class Test
    {
        public static string $staticProperty = 'static';
        private static string $property = 'Help me';
        public string $usualProperty = 'usual';

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

        public function method()
        {
            var_dump(self::$staticProperty) . '<br>'; // выведет 'static'
            var_dump($this->usualProperty);  // выведет 'usual'
        }
    }