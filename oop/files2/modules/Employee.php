<?php

    namespace files2\modules;
    /**
     * Class Employee
     * @package modules
     */
    class Employee extends User
    {
        private $salary;

        /**
         * Employee constructor.
         * @param $name
         * @param $age
         * @param $years
         * @param $salary
         */
        public function __construct($name, $age, $years, $salary)
        {
            parent::__construct($name, $age, $years);
            $this->salary = $salary;
        }

        /**
         * @return mixed
         */
        public function getSalary(): string
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