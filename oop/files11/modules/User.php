<?php


    abstract class User
    {
        private $name;

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name): void
        {
            $this->name = $name;
        }

        abstract public function increaseRevenue($value);
        abstract public function decreaseRevenue($value);
    }