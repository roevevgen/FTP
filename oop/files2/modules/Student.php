<?php

    namespace files2\modules;
    /**
     * Class Student
     * @package modules
     */
    class Student extends User
    {
        private $course;

        /**
         * Student constructor.
         * @param $name
         * @param $age
         * @param $years
         * @param $course
         */
        public function __construct($name, $age, $years, $course)
        {
            parent::__construct($name, $age, $years);
            $this->course = $course;
        }

        /**
         * @return mixed
         */
        public function getCourse(): string
        {
            return $this->course . ' course';
        }

        /**
         * @param mixed $course
         */
        public function setCourse($course): void
        {
            $this->course = $course;
        }

        /**
         *
         */
        public function addOneYear()
        {
            $this->age++;
        }


        public function setAge($age)
        {
            if ($age <= 25) {
                parent::setAge($age);
            } else {
                echo 'Ты уже не студент';
            }
        }
    }