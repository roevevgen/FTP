<?php


    class Math implements iMath
    {

        public function __unset($name){
            if(!property_exists($this,$name))
            {
                die('__unset:Такого свойства не существует');
            }
            $this->$name = null;
        }

        public function sum($a, $b)
        {
            // TODO: Implement sum() method.
            return $a + $b;
        }

        public function subtract($a, $b)
        {
            // TODO: Implement subtract() method.
            return $a - $b;
        }

        public function multiply($a, $b)
        {
            // TODO: Implement multiply() method.
            return $a * $b;
        }

        public function divide($a, $b)
        {
            // TODO: Implement divide() method.
            return $a / $b;
        }
    }