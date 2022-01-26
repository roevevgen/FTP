<?php


    class User implements iUser
    {
        private $name;
        private $age;

        public function __unset($name){
            if(!property_exists($this,$name))
            {
                die('__unset:Такого свойства не существует');
            }
            $this->$name = null;
        }

        public function setName($name)
        {
            // TODO: Implement setName() method.
            $this->name = $name;
        }

        public function getName()
        {
            // TODO: Implement getName() method.
            return $this->name;
        }

        public function setAge($age)
        {
            // TODO: Implement setAge() method.
            $this->age = $age;
        }

        public function getAge()
        {
            // TODO: Implement getAge() method.
            return $this->age;
        }
    }