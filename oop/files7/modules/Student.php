<?php


    class Student
    {
        private $name;
        private $scholarship;

        public function __construct($name, $scholarship){
            $this->name = $name;
            $this->scholarship = $scholarship;
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
        public function getScholarship()
        {
            return $this->scholarship;
        }
    }