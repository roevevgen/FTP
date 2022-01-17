<?php


    class Employee
    {
        private $name;
        protected $salary;

        public function __construct($name, $salary)
        {
            $this->name = $name;
            $this->salary = $salary;
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
        public function getSalary()
        {
            return $this->salary;
        }
    }