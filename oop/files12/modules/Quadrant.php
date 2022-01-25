<?php


    class Quadrant implements Figure
    {

        private $a;

        public function __construct($a)
        {
            $this->a = $a;
        }

        public function getSquare()
        {
            // TODO: Implement getSquare() method.
            return $this->a * $this->a;
        }

        public function getPerimeter()
        {
            // TODO: Implement getPerimeter() method.
            return 4 * $this->a;
        }


    }