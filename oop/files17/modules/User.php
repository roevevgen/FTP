<?php


    class User
    {
        private $name;
        private $surname;
        private $patronymic;

        public function __construct($name, $surname, $patronymic)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->patronymic = $patronymic;

        }

        public function __toString()
        {
            return $this->name . ' ' . $this->surname . ' '  . $this->patronymic;

        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getSurname()
        {
            return $this->surname;
        }

        /**
         * @return mixed
         */
        public function getPatronymic()
        {
            return $this->patronymic;
        }

    }