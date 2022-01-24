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

        /**
         * @param $value
         * @return mixed
         */
        abstract public function increaseRevenue($value);

        /**
         * @param $value
         * @return mixed
         */
        abstract public function decreaseRevenue($value);
    }