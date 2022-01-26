<?php


    class User implements iUser
    {
        private $name;
        private $age;

        /**
         * @param $name
         */
        public function __unset($name)
        {
            if (!property_exists($this, $name)) {
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