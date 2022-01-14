<?php


    class Student extends User
    {
        private $course;

        public function __construct($name, $age, $years, $course)
        {
            parent::__construct($name, $age, $years);
            $this->course = $course;
        }

        /**
         * @return mixed
         */
        public function getCourse()
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
    }