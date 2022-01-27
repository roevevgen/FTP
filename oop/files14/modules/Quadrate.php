<?php


    class Quadrate implements iFigure, iTetragon
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

        public function getA()
        {
            return $this->a;
        }

        public function getB()
        {
            return $this->a;
        }

        public function getC()
        {
            return $this->a;
        }

        public function getD()
        {
            return $this->a;
        }
    }