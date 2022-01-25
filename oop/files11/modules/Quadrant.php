<?php


    class Quadrant extends Figure
    {

        private $a;

        public function __construct($a){

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
        public function getSquarePerimeterSum()
        {
            // TODO: Implement getSquarePerimeterSum() method.// находить сумму площади и периметра P=2(a+b), S=a*b
            $perimeter = 2 * ($this->a + $this->a);
            $square = $this->a * $this->a;

            return $perimeter + $square;
        }
    }