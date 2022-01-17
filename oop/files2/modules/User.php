<?php


    class User
    {
        protected $name;
        protected $age;
        private $years;

        public function __construct($name, $age, $years)
        {
            $this->name = $name;
            $this->age = $age;
            $this->years = $years;
        }

//        /**
//         * @return mixed
//         */
//        public function getYears()
//        {
//            return $this->years;
//        }
//
//        /**
//         * @param mixed $years
//         */
//        public function setYears($years): void
//        {
//            $this->years = $years;
//        }

        private function isAgeCorrect($age): bool
        {
            if ($age >= 18 and $age <= 100) {
                return true;
            } else {
                return false;
            }
        }

        // Метод для изменения возраста юзера:
        public function setAge($age)
        {
            // Если возраст от 18 до 60:
            if ($this->isAgeCorrect($age)) {
                $this->age = $age;
            } else {
                echo 'Не верный возраст';
            }
        }

        // Метод для добавления к возрасту:
        public function addAge($years)
        {
            $newAge = $this->age + $years; // вычислим новый возраст

            // Если НОВЫЙ возраст от 18 до 60:
            if ($this->isAgeCorrect($newAge)) {
                $this->age = $newAge; // обновим, если новый возраст прошел проверку
            }
        }

        /**
         * @return mixed
         */
        public function getAge()
        {
            return $this->age;
        }

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
    }