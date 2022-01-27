<?php


    class Rectangle implements iTetragon, iFigure
    {
        private $a;

        public function __construct($a){
            $this->a = $a;
        }

        public function getA()
        {
            // TODO: Implement getA() method.
            return $this->a;
        }

        public function getB()
        {
            // TODO: Implement getB() method.
            return $this->a;
        }

        public function getC()
        {
            // TODO: Implement getC() method.
            return $this->a;
        }

        public function getD()
        {
            // TODO: Implement getD() method.
            return $this->a;
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