<?php


    class Math implements iMath
    {
        /**
         * @param $name
         */
        public function __unset($name){
            if(!property_exists($this,$name))
            {
                die('__unset:Такого свойства не существует');
            }
            $this->$name = null;
        }

        /**
         * @param $name
         * @param $value
         */
        public function __set($name, $value)
        {
            if(!property_exists($this,$name))
            {
                die('__set Такого свойства не существует');
            }

            $this->$name = htmlentities($value);
        }

        /**
         * @param $name
         * @return string
         */
        public function __get($name): string
        {
            if(!property_exists($this,$name))
            {
                die('__get Такого свойства не существует');
            }

            return html_entity_decode($this->$name);
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