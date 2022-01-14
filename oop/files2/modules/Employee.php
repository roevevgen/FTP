<?php


    class Employee extends User
    {
        private $salary;

        public function __construct($name, $age, $years, $salary)
        {
            parent::__construct($name, $age, $years);
            $this->salary = $salary;
        }

        /**
         * @return mixed
         */
        public function getSalary()
        {
            return $this->salary . ' $';
        }

        /**
         * @param mixed $salary
         */
        public function setSalary($salary): void
        {
            $this->salary = $salary;
        }
    }