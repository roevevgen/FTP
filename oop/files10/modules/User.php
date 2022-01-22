<?php


    class User
    {
        public $name;
        private static $count;

        public function __construct($name)
        {
            $this->name = $name;
            self::$count++;
        }

        /**
         * @return mixed
         */
        public static function getCount()
        {
            return self::$count;
        }
    }