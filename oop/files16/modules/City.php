<?php


    class City
    {
        use Helper;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }
    }