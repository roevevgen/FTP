<?php


    class User
    {
        use Helper, HelperName {
            HelperName::getAge insteadof Helper;
            Helper::getAge as getAge2;
            HelperName::getName insteadof Helper;
            Helper::getName as getName2;
        }

        // подключаем трейт

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

    }