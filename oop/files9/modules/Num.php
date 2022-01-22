<?php


    class Num
    {
        private static  $num1 = 2;
        private static  $num2 = 3;

        public static function getSum($num1, $num2)
        {
            return $num1 + $num2;
        }


        /**
         * @return int
         */
        public static function getNum1(): int
        {
            return self::$num1;
        }

        /**
         * @return int
         */
        public static function getNum2(): int
        {
            return self::$num2;
        }

        /**
         * @param int $num1
         */
        public static function setNum1(int $num1): void
        {
            self::$num1 = $num1;
        }

        /**
         * @param int $num2
         */
        public static function setNum2(int $num2): void
        {
            self::$num2 = $num2;
        }
    }