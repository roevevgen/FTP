<?php


    class Employee extends User
    {
        private $salary;

        /**
         * @return mixed
         */
        public function getSalary()
        {
            return $this->salary;
        }

        /**
         * @param mixed $salary
         */
        public function setSalary($salary): void
        {
            $this->salary = $salary;
        }

        /**
         * @param $value
         * @return mixed|void
         */
        public function increaseRevenue($value)
        {
            // TODO: Implement increaseRevenue() method.
            $this->salary = $this->salary + $value;
        }

        /**
         * @param $value
         * @return mixed|void
         */
        public function decreaseRevenue($value)
        {
            // TODO: Implement decreaseRevenue() method.
            $this->salary = $this->salary - $value;
        }
    }