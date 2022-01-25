<?php


    class Rectangle extends Figure
    {
        private $a;
        private $b;

        public function __construct($a, $b){

            $this->a = $a;
            $this->b = $b;
        }

        public function getSquare()
        {
            // TODO: Implement getSquare() method.
            return $this->a * $this->b;
        }

        public function getPerimeter()
        {
            // TODO: Implement getPerimeter() method.
            return (2 * $this->a)*(2 * $this->b);
        }
        public function getSquarePerimeterSum()
        {
            // TODO: Implement getSquarePerimeterSum() method.
            $perimeter = 2 * ($this->a + $this->b);
            $square = $this->a * $this->b;

            return $perimeter + $square;
        }
    }